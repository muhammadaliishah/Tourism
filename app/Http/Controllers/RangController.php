<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangController extends Controller
{
    public function index()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=3";
        DB::update($sql);
    	//echo "hello";
    	return view('rang.rang');
    }
	public function index1()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=3";
        DB::update($sql);
    	//echo "hello";
    	return view('rang.rang1');
    }
}
