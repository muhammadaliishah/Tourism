<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HotelController extends Controller
{
    public function index()
    {
    	$hotelList = DB::table('hotels')
    		->get();
            
    	return view('hotel.index')
    		->with('hotelList', $hotelList);
    }
    public function book($id)
    {
        $hotel = DB::table('hotels')
            ->where('h_id',$id)
            ->first();
        return view('hotel.bookindex')
            ->with('hotel', $hotel);

    }
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            
            'uname' => 'required',
            'phone' => 'required|min:11',
            // 'no_rooms' => 'required|max:'
            
        ]);
        
        $params = [
            'h_id'=> $request->h_id,
            'HotelName'=> $request->h_name,
            'Booker' => $request->session()->get('booker'),
            'Name'=> $request->uname,
            'ContactNo'=> $request->phone,
            'no_rooms' => $request->no_rooms,
            'Status' => 'Pending'
        ];

        DB::table('bookingdetails')
            ->insert($params);
            $request->session()->put('no_rooms', $request->no_rooms);
            $request->session()->put('h_id', $request->h_id);
        
    

        
        // $rooms='Booked_room';
        // $rooms2=request->no_rooms;
        // $rooms=$rooms-$rooms2;
        // $params = [
     //        'Booked_room' => $rooms,
     //    ];

     //    DB::table('hotels')
     //        ->where('h_id', $request->h_id)
     //        ->update($params);

        return redirect('/home');
    }
}
