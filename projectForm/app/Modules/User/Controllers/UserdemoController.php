<?php

namespace App\Modules\User\Controllers;
use App\Modules\User\Models\User;
use App\Modules\User\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Modules\User\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class UserdemoController extends Controller
{

    public function curl(){
        return view("User::curl");
    }

    public function userRegistorview(){

        return view('User::signup');
    }

    public function userdashboard(){

    return view('User::userdashboard');
    }

    public function userRegistor(request $request){

                //validations
                $this->validate($request, [
                    'email' => 'required|email|unique:users',
                    'password' => 'Required|AlphaNum|Between:4,8',
                    'picture' => 'image|mimes:jpg,png',
                ]);
                //ANOTHER TYPE DATA SAVE
                $user = new User();
                $user->name = input::get("name");
                $user->lname = input::get("lname");
                $user->email = input::get("email");
                $user->password = bcrypt($request['password']);
                $files = Input::file('file');
                //IMAGE UPLOADING
                if (!empty($files)):
                    foreach ($files as $files) ;
                    $name = $files->getClientOriginalName();
                    $size = $files->getClientsize();
                    $user->picture = $name;
                    $user->size = $size;
                    $user->role=0;
                    $files->move(public_path() . '/images/', $name, $size);
                endif;
                $user->save();
            return view("User::signup");
        }

   public function userloginview(){
       return view('User::login');
   }


    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'Required|AlphaNum|Between:4,12',
        ]);
        $email = $request->input("email");
        $password = ($request['password']);
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 0])) {
            return redirect('userdashboard');
        } else
            return view("User::login")->with('msg', 'Please check your creds.');
    }



    public function forgetpass(){
        return view("User::forgetpass");
    }

    public function forgetPassValidate(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
            ]);
            $email = $request->input("email");
            $rand = rand();


            DB::table('users')
                ->where('email', $email)
                ->update(['rand' => $rand]);
            $sessionName='email';
            $sessionName= $email;
            session(['key'=>$sessionName]);
            Session::put("randomnumber",$rand);
            $data = [
                "UserName" => $email,
                "randomnumber" => $rand,
                "Message" => 'Welcome'
            ];
            /* EMAIL SENDING */
            Mail::send(['text' => 'User::mail'],$data, function($message)use($email){
                $message->to($email,'xyz')->subject('Send mail from laravel with basic email ');
                $message->from('fcrohitpawar@gmail.com','Forgot Password ');
            });
            return view('User::forgotpassotp');
        } else {
            echo "enter valid email id";
        }
    }

    public function forgotpassotp(Request $request ){

        $otp = $request->input("otp");
        $email =  session('key');
        $b = DB::table('users')->where('email',$email)->value('rand');
        if($otp==$b){
            return view('User::edit');
        }
        else{
            echo "otp code mismach";
        }

    }

    public function update(Request $request)
    {
        $email =  session('key');
        $newpass=bcrypt($request['newpassword']);
        DB::table('users')
            ->where('email', $email)
            ->update(['password' => $newpass]);
        return view('User::login');
    }

    public function userLogout(){
        //print_r(Auth::user());
        //die();
        Auth::logout();
        return Redirect('adminlogin');

    }
}