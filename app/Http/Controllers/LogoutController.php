<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
    	//$request->session()->forget('user');
    	$request->session()->flush();
    	return redirect('/home1');
    }
}
