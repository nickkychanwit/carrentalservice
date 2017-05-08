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
Route::get('/return', 'RentalController@bookingReturn');
Route::get('/promotion', 'PromotionController@show');

Route::get('/receive', 'RentalController@bookingReceive');
Route::get('/receive/{id}/{status}', 'RentalController@updateStatus');
Route::get('/return/{id}/{status}', 'RentalController@updateStatus');
Route::get('/rental', 'RentalController@index');
Route::get('/bookingall', 'RentalController@bookingAll');
Route::post('confirm', 'RentalController@confirm');
Route::post('booking', 'RentalController@booking');
Route::post('information/{id}', 'RentalController@information');
Route::post('confirmed/{id}', 'RentalController@confirmed');

Route::get('/edit', 'MemberController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('/promotion','PromotionController@index');
Route::get('/promotion', function () {
    return view('promotion');
});
Route::post('/promotion','PromotionController@show');
Route::get('/voucher','VoucherController@index')->name('voucher');
Route::get('/addcar','CarController@index');
Route::post('/addcar','CarController@store')->name('createcar');