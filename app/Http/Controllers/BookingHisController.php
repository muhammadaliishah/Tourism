<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingHisController extends Controller
{
	public function index(Request $request)
    {
        $book = DB::table('bookingdetails')
            ->where('booker',$request->session()->get('booker'))
            ->get();
        return view('bookinghistory.index')
            ->with('books', $book);

    }
 }