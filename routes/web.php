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

Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/hotel_profile', function () {
    return view('frontend.hotel_profile');
});
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/table_booking', function () {
    return view('frontend.table_booking');
});
Route::get('/category-list', function(){
	return view('frontend.categoryListing');
});
Route::get('/grocery-order', function(){
	return view('frontend.grocery-order');
});
Route::get('/add-product', function(){
	return view('frontend.add-product');
});
Route::get('/login', function(){
	return view('frontend.login');
});
Route::get('/food_order', function(){
	return view('frontend.food_order');
});
Route::get('/food_checkout', function(){
	return view('frontend.food_checkout');
});
Route::get('/free-listing', function(){
	return view('frontend.free-listing');
});
