<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlacesController extends Controller
{
    public function index()
    {
    	// $sql = "UPDATE places SET number_of_visitors=number_of_visitors+1";
    	// DB::update($sql,[$request->p_id]);
    	$placeList = DB::table('places')
        ->orderBy('number_of_visitors', 'DESC')
    		->get();
    	return view('places.index')
    		->with('placeList', $placeList);
    	
    }
	public function index1()
    {
    	// $sql = "UPDATE places SET number_of_visitors=number_of_visitors+1";
    	// DB::update($sql,[$request->p_id]);
    	$placeList = DB::table('places')
        ->orderBy('number_of_visitors', 'DESC')
    		->get();
    	return view('places.index1')
    		->with('placeList', $placeList);
    	
    }
}
