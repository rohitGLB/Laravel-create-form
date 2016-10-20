<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Models\Admin;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {

public static function adminloginview(){

	return view('Admin::adminlogin');

}

	public function adminLogin(Request $request){
			$this->validate($request, [
				'email' => 'required',
				'password' => 'Required|AlphaNum|Between:4,8',
			]);
			$email = $request->input("email");
			$password = ($request['password']);
			if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {

					return redirect('/dashboard');
				}
				return view("Admin::adminlogin")->with('msg', 'Please check your creds.');
			}



	public function admindashboard(){
		return view('Admin::admin');
	}


	public function adminLogout(){
		//print_r(Auth::user());
		//die();
		Auth::logout();
		return Redirect('adminlogin');

	}
}
