<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact_usController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('contact_us.index');
    }
    public function submit(Request $request)
    {
    	$params = [
    		'First_Name'=> $request->FirstName,
    		'Last_Name'=> $request->LastName,
    		'Email'=> $request->Email,
    		'Comment' => $request->Comment
    	];

    	DB::table('queries')
    		->insert($params);
    	return redirect('/home');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('contact_us.index1');
    }
    public function submit1(Request $request)
    {
    	$params = [
    		'First_Name'=> $request->FirstName,
    		'Last_Name'=> $request->LastName,
    		'Email'=> $request->Email,
    		'Comment' => $request->Comment
    	];

    	DB::table('queries')
    		->insert($params);
    	return redirect('/home1');
    }
}
