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
Route::get('/filterbarang', 'HomeController@filterbarang')->name('filterbarang');

Route::middleware(['auth'])->group(function(){
	Route::get('/home', 'BarangController@index')->name('home');
});

Route::middleware(['auth','verified'])->group(function(){
	Route::get('/barangBuat','BarangController@addItems')->name('barangs_make');
	Route::post('/barangSimpan','BarangController@storeItems')->name('barangs_store');
	Route::post('/barangHapus','BarangController@delItems');
	Route::get('/getAll','BarangController@getAll');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::get('/barang','BarangController@listItems')->name('barangs');
	Route::post('/editprofile', 'HomeController@store');
	Route::get('/make','LelangController@make')->name('make');
	Route::post('/lelangBuat','LelangController@addLelang')->name('lelang_store');
});

Route::group(['middleware' => ['admin']], function() {

});