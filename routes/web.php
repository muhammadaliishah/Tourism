<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
Route::get('/logout', 'LogoutController@index');
Route::get('/error', 'LoginController@error1');
Route::get('/error1', 'LoginController@error2');
Route::group(['middleware' => ['user']], function(){

	Route::get('/home', 'HomeController@index');
	Route::get('/profile', 'ProfileController@index');
	Route::put('/profile/', 'ProfileController@edit1');
	Route::get('/contact_us', 'Contact_usController@index');
	Route::post('/contact_us', 'Contact_usController@submit');
	Route::get('/hotel', 'HotelController@index');
	Route::get('/hotel/{id}/book', 'HotelController@book');
	Route::put('/hotel/{id}', 'HotelController@store');
	Route::get('/bookinghistory', 'BookingHisController@index');
	Route::get('/gallery', 'GalleryController@index');
	Route::get('/places', 'PlacesController@index');
	Route::get('/cox', 'CoxController@index');
	Route::get('/jaf', 'JafController@index');
	Route::get('/rang', 'RangController@index');
	Route::get('/saj', 'SajController@index');
	Route::get('/sun', 'SunController@index');
	Route::get('/st', 'StController@index');
	Route::get('/law', 'LawController@index');
	Route::get('/foy', 'FoyController@index');
	Route::get('/places/1', function () {
	    return redirect('/cox');
	});
	Route::get('/places/2', function () {
	    return redirect('/jaf');
	});
	Route::get('/places/3', function () {
	    return redirect('/rang');
	});
	Route::get('/places/4', function () {
	    return redirect('/saj');
	});
	Route::get('/places/5', function () {
	    return redirect('/sun');
	});
	Route::get('/places/6', function () {
	    return redirect('/st');
	});
	Route::get('/places/7', function () {
	    return redirect('/law');
	});
	Route::get('/places/8', function () {
	    return redirect('/foy');
	});
	

});


Route::group(['middleware' => ['admin']], function(){

	Route::get('/admin', 'AdminController@index');
	Route::delete('/admin', 'AdminController@destroy');
	Route::put('/admin', 'AdminController@update');
	Route::get('/admin/delete', 'AdminController@delete');
	Route::get('/admin/update', 'AdminController@edit');
	Route::get('/admin/{id}/edit1', 'AdminController@edit1');

	Route::get('/admin/{id}/delete1', 'AdminController@delete1');
	Route::get('/admin/queries', 'AdminController@queries');
	Route::get('/admin/hotelinfo', 'AdminController@hotelinfo');
	Route::put('/admin/hotelinfobook', 'AdminController@hotelinfobook');
	Route::get('/admin/hotelinfo/{id}/edit1', 'AdminController@hotelinfoedit1');
	Route::get('/admin/hotelinfo/{id}/delete1', 'AdminController@hotelinfodelete1');
	Route::put('/admin/hotelinfo', 'AdminController@hotelinfoupdate');
	Route::delete('/admin/hotelinfo', 'AdminController@hotelinfodestroy');
	Route::get('/admin/addHotels', 'AdminController@addHotelindex');
	Route::get('/admin/bookingdetails', 'AdminController@bookingindex');
	Route::put('/admin/addHotels', 'AdminController@addHotel');
	Route::get('/admin/{id}/bookingaccept', 'AdminController@bookingaccept');
	Route::get('/admin/{id}/bookingdelete', 'AdminController@bookingdelete');
	Route::delete('/admin/deletebook', 'AdminController@deletebook');
	Route::put('/admin/acceptbook', 'AdminController@acceptbook');

});


Route::get('/gallery1', 'GalleryController@index1');
Route::get('/cox1', 'CoxController@index1');
Route::get('/jaf1', 'JafController@index1');
Route::get('/rang1', 'RangController@index1');
Route::get('/saj1', 'SajController@index1');
Route::get('/sun1', 'SunController@index1');
Route::get('/st1', 'StController@index1');
Route::get('/law1', 'LawController@index1');
Route::get('/foy1', 'FoyController@index1');
Route::get('/places1/1', function () {
	    return redirect('/cox1');
	});
	Route::get('/places1/2', function () {
	    return redirect('/jaf1');
	});
	Route::get('/places1/3', function () {
	    return redirect('/rang1');
	});
	Route::get('/places1/4', function () {
	    return redirect('/saj1');
	});
	Route::get('/places1/5', function () {
	    return redirect('/sun1');
	});
	Route::get('/places1/6', function () {
	    return redirect('/st1');
	});
	Route::get('/places/7', function () {
	    return redirect('/law1');
	});
	Route::get('/places/8', function () {
	    return redirect('/foy1');
	});
Route::get('/places1', 'PlacesController@index1');
Route::get('/home1', 'HomeController@index1');

Route::get('/', 'HomeController@index1');