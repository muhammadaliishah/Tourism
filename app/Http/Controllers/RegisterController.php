<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('register.register');
    }
    public function store(Request $request)
    {
        $sql = "SELECT * FROM userinfo WHERE Username='$request->UName'";
        $res = DB::select($sql);
        
        $this->validate($request, [
            
        
            'contactno' => 'required|digits:11',
            'password' => 'required|min:8',
            // 'no_rooms' => 'required|max:'
            
        ]);
        
        
        if(!$res){
            $params = [
            'Username'=> $request->UName,
            'FirstName'=> $request->FName,
            'LastName'=> $request->LName,
            'Password' => $request->password,
            'Email' => $request->email,
            'ContactNo'=>$request->contactno
                
                
        ];
            $request->session()->flash('alert-success', 'Registration successful, Please Login Now!');
        DB::table('userinfo')
            ->insert($params);
        return redirect('/login');
        }
        else{
            return redirect('/error1');
        }
    	
    }
}
