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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TampilanController@index');
Route::get('/tampilan', 'TampilanController@home');

Route::get('/add', 'TampilanController@create');

// Dekorasi
Route::get('/showdekor', 'TampilanController@liat');
Route::get('/readdekor/{id}', 'TampilanController@show');
Route::get('/editdekor/{id}', 'TampilanController@editdekor');
Route::post('/update/{id}', 'TampilanController@update');
Route::get('/delete/{id}', 'TampilanController@destroy');


//Fotografer
Route::get('/showfoto', 'FotografiController@liat');
Route::get('/readfoto/{id}', 'FotografiController@show');

//ketring
Route::get('/showketring', 'KetringController@liat');
Route::get('/readketring/{id}', 'KetringController@show');

//venue
Route::get('/showvenue', 'VenueController@liat');
Route::get('/readvenue/{id}', 'VenueController@show');

//Rias dan Busana
Route::get('/showrias', 'RiasController@liat');
Route::get('/readrias/{id}', 'RiasController@show');


Route::get('/dekorasi', 'TampilanController@dekorasi');
Route::get('/ketring', 'KetringController@ketring');
Route::get('/foto', 'FotografiController@foto');
Route::get('/venue', 'VenueController@venue');
Route::get('/rias', 'RiasController@rias');

Route::post('/storedekor', 'TampilanController@storedekor');
Route::post('/storeketring', 'KetringController@storeketring');
Route::post('/storefoto', 'FotografiController@storefoto');
Route::post('/storevenue', 'VenueController@storevenue');
Route::post('/storerias', 'RiasController@storerias');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
