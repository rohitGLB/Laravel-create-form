<?php namespace App\Modules\Admin\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class Admin extends Model implements Authenticatable{

    use \Illuminate\Auth\Authenticatable;
    protected $table='users';
    public $timestamps = false;
    protected $hidden = [
        'password', 'remember_token',
    ];
    private static $_instance=null;

    public function insertuserData(){
        //  die("me");
        if(func_num_args()>0){

            $userData = func_get_arg(0);

            try {
                $result = DB::table("users")
                    ->insertGetId($userData);
                return $result;
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        } else {
            throw new Exception('Argument Not Passed');
        }
    }
//for admin log in
    public static function getInstance()
    {
        if (!is_object(self::$_instance))
            self::$_instance = new Admin();
        return self::$_instance;
    }

//for admin log in
    public function getUserById($userId)
    {

        $result = Admin::whereId($userId)->first();
        return $result;
    }

}
