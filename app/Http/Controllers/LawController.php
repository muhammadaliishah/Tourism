<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawController extends Controller
{
    public function index()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=7";
        DB::update($sql);
    	//echo "hello";
    	return view('law.law');
    }
	public function index1()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=7";
        DB::update($sql);
    	//echo "hello";
    	return view('law.law1');
    }
}
