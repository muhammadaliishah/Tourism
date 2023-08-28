<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('home.index');
    }
    public function index1()
    {
    	//echo "hello";
    	return view('home.index1');
    }

}
