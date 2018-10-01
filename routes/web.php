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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/profile', function () {
    return view('frontend.hotel_profile');

});
Route::get('/category-list', function(){
	return view('frontend.categoryListing');
});
Route::get('/category-detail', function(){
	return view('frontend.category-detail');
});

Route::get('/login', function(){
	return view('frontend.login');
});
