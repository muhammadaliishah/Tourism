<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function index(Request $request)
    {
    	//echo "hello";
        $user = DB::table('userinfo')
            ->where('Username',$request->session()->get('booker'))
            ->first();
        return view('profile.index')
            ->with('user', $user);
    }
    public function edit1(Request $request)
    {
        //echo "hello";
        $params = [
            'Password' => $request->Password
        ];

        DB::table('userinfo')
            ->where('user_id', $request->user_id)
            ->update($params);

        return redirect('/home');
    }
}
