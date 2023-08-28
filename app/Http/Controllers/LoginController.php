<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('login.index');
    }
    public function verify(Request $request)
    {
    	$sql = "SELECT * FROM userinfo WHERE Username='$request->username' AND Password='$request->password'";
        $res = DB::select($sql);

         // $res = DB::table('userinfo')
         //     ->where('Username', $request->username)
         //     ->where('Password', $request->password)
         //     ->get();
            
    	if(!$res)
    	{
            $sql = "SELECT * FROM admin WHERE admin_id='$request->username' AND admin_pass='$request->password'";
            $res = DB::select($sql);
            if(!$res){
                return redirect('/error');
            }
            else
            {
                $request->session()->put('admin', $res);
                return redirect('/admin');
            }
    		
    	}
    	else
    	{
            $request->session()->put('user', $res);
            $request->session()->put('booker', $request->username);
    		return redirect('/home');
    	}
    }
    public function error1()
    {
        //echo "hello";
        return view('error.admin_error');
    }
    public function error2()
    {
        //echo "hello";
        return view('error.reg_error');
    }
}
