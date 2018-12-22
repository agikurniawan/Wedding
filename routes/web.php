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



Route::get('/', 'AwalController@index');
Route::get('/coba/{id}', 'CrudController@tampilkanID');
Route::get('/show', 'CrudController@index');

// Route::get('/tambah', function () {
//     $vendor = new Vendor;
//     $vendor->nama="Asep";
//     $vendor->alamat="jl.pasir impun";
//     $vendor->email="aa@mail.com";
//     $vendor->telepon="0899992222";
//     $vendor->gambar="I.jpg";
//     $vendor->jasa="Cetring";

//     $vendor->save();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
