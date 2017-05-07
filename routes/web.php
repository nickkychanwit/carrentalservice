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
    return view('welcome');
});
Route::get('/rental', 'RentalController@index');
Route::get('/bookingall', 'RentalController@bookingAll');
Route::post('confirm', 'RentalController@confirm');
Route::post('booking', 'RentalController@booking');
Route::post('information/{id}', 'RentalController@information');
Route::post('confirmed/{id}', 'RentalController@confirmed');

Route::get('/edit', 'MemberController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index');
