<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('gallery.Gallery');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('gallery.Gallery1');
    }
}
