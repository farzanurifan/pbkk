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
    return view('home');
})->name('landing');

Auth::routes(['verify' => true]);

Route::get('/kategori/dummy', 'HomeController@kategori')->name('kategori');
Route::get('/barang/{id}','BarangController@detail');
Route::post('/search','BarangController@search')->name('searchItem');

Route::middleware(['auth'])->group(function(){
	Route::get('/home', 'BarangController@index')->name('home');
});

Route::middleware(['auth','verified'])->group(function(){
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::get('/barang','BarangController@index')->name('barangs');
	Route::post('/editprofile', 'HomeController@store');
	Route::get('/make','BarangController@make')->name('make');
});
