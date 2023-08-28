<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function bookingindex()
    {
    	$bookinglist = DB::table('bookingdetails')
    		->get();
    	return view('bookingdetails.index')
    		->with('bookinglist', $bookinglist);
    }
    public function index()
    {
        $userlist = DB::table('userinfo')
            ->get();
        return view('admin-userinfo.index')
            ->with('userlist', $userlist);
    }
    public function bookingdelete($id)
    {
        $bookings = DB::table('bookingdetails')
            ->where('b_id',$id)
            ->first();
        return view('bookingdetails.delete')
            ->with('bookings', $bookings);

    }
    public function bookingaccept($id)
    {
        $bookings = DB::table('bookingdetails')
            ->where('b_id',$id)
            ->first();
        return view('bookingdetails.accept')
            ->with('bookings', $bookings);

    }

    public function acceptbook(Request $request)
    {
        $params = [
            'Status' => 'Accepted'
        ];

        DB::table('bookingdetails')
            ->where('b_id',$request->b_id)
            ->update($params);
        $sql = "UPDATE hotels SET Booked_room=Booked_room+? WHERE h_id=?";
        DB::update($sql,[$request->no_rooms,$request->h_id]);

        return redirect('/admin');

    }
    public function delete()
    {
    	$userlist = DB::table('userinfo')
    		->get();
    	return view('delete.index')
    		->with('userlist', $userlist);
    }

    public function destroy(Request $request)
    {
        DB::table('userinfo')
            ->where('user_id', $request->user_id)
            ->delete();

        return redirect('/admin');
    }

    public function deletebook(Request $request)
    {
        DB::table('bookingdetails')
            ->where('b_id', $request->b_id)
            ->delete();

        $sql = "UPDATE hotels SET Booked_room=Booked_room-? WHERE h_id=?";
        DB::update($sql,[$request->no_rooms,$request->h_id]);

        return redirect('/admin');
    }

    public function edit()
    {
    	$userlist = DB::table('userinfo')
    		->get();
    	return view('update.index')
    		->with('userlist', $userlist);
    }
    public function edit1($id)
    {
        $users = DB::table('userinfo')
            ->where('user_id',$id)
            ->first();
        return view('update.index1')
            ->with('users', $users);

    }
    public function delete1($id)
    {
        $users = DB::table('userinfo')
            ->where('user_id',$id)
            ->first();
        return view('delete.index1')
            ->with('users', $users);

    }
    public function update(Request $request)
    {
        $params = [
            'Password' => $request->Password
        ];

        DB::table('userinfo')
            ->where('user_id', $request->user_id)
            ->update($params);

        return redirect('/admin');
    }
    public function queries()
    {
    	$querylist = DB::table('queries')
    		->get();
    	return view('queries.index')
    		->with('querylist', $querylist);
    }
    public function hotelinfo()
    {
    	$hotelList = DB::table('hotels')
    		->get();
    	return view('Hotelinfo.index')
    		->with('hotelList', $hotelList);
    }
    public function hotelinfoedit1($id)
    {
        $hotel = DB::table('hotels')
            ->where('h_id',$id)
            ->first();
        return view('hotelupdate.index1')
            ->with('hotel', $hotel);

    }
    public function hotelinfodelete1($id)
    {
        $hotel = DB::table('hotels')
            ->where('h_id',$id)
            ->first();
        return view('hoteldelete.index1')
            ->with('hotel', $hotel);

    }
    public function hotelinfobook(Request $request)
    {
        $sql = "UPDATE hotels SET Booked_room=Booked_room+? WHERE h_id=?";
        DB::update($sql,[$request->bookrooms,$request->h_id]);


        return redirect('/admin/hotelinfo');
    }
    public function addHotelindex(Request $request)
    {
        $placelist = DB::table('places')
            ->get();
        return view('addHotel.index')
            ->with('placelist', $placelist);
    }
    public function addHotel(Request $request)
    {
        $this->validate($request, [
            
            'h_name' => 'required',
            't_no_rooms' => 'required|digits_between:1,4'
           
            
        ]);
        $params = [
            'h_name'=>$request->h_name,
            'Booked_room'=>'0',
            'Total_room'=>$request->t_no_rooms,
            'Location'=> $request->p_name
        ];

        DB::table('hotels')
            ->insert($params);
        return redirect('/admin');
    }

    public function hotelinfoupdate(Request $request)
    {
        $params = [
            'h_name' => $request->name
        ];

        DB::table('hotels')
            ->where('h_id', $request->h_id)
            ->update($params);

        return redirect('/admin/hotelinfo');
    }
    public function hotelinfodestroy(Request $request)
    {
        DB::table('hotels')
            ->where('h_id', $request->h_id)
            ->delete();

        return redirect('/admin/hotelinfo');
    }
}
