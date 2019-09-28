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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kasir', function (){
    return view('kasir');
});
Route::get('/pegawai', 'PegawaiController@index');

Route::get('/pelanggan', function (){
    return view('pelanggan');
});
Route::get('/daftarLoket', 'loketController@index');

Route::get('/jasa', 'JasaController@index');

Route::get('/belanja', function (){
    return view('belanja');
});
Route::get('/laporan', function (){
    return view('laporan');
});
Route::get('/dasbor', function (){
    return view('dasbor');
});
Route::get('/riwayat', function (){
    return view('riwayat');
});

Route::resource('lokets','loketController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/pegawai', 'PegawaiController');

Route::resource('/jasa', 'JasaController');

Route::post('/belanja', 'BelanjaController@belanja');
