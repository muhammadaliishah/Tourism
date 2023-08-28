<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoyController extends Controller
{
    public function index()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=8";
        DB::update($sql);
    	//echo "hello";
    	return view('foy.foy');
    }
	public function index1()
    {
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=8";
        DB::update($sql);
    	//echo "hello";
    	return view('foy.foy1');
    }
}
