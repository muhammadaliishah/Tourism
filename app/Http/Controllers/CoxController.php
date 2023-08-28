<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoxController extends Controller
{
    public function index()
    {
    	//echo "hello";
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=1";
        DB::update($sql);
    	return view('cox.cox');
    }
	public function index1()
    {
    	//echo "hello";
        $sql = "UPDATE places SET number_of_visitors = number_of_visitors+1 WHERE p_id=1";
        DB::update($sql);
    	return view('cox.cox1');
    }
}
