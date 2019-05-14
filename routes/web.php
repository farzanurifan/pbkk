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
Route::get('/lelang/{id}','LelangController@detail');
Route::post('/search','BarangController@search')->name('searchItem');
Route::get('/filterbarang', 'HomeController@filterbarang')->name('filterbarang');
Route::get('/lihatbarang/dummy', 'LelangController@lihatbarang')->name('lihatbarang');


Route::middleware(['auth'])->group(function(){
	Route::get('/home', 'LelangController@index')->name('home');
});

Route::middleware(['auth','verified'])->group(function(){
	Route::get('/barangBuat','BarangController@addItems')->name('barangs_make');
	Route::post('/barangSimpan','BarangController@storeItems')->name('barangs_store');
	Route::post('/barangHapus','BarangController@delItems');
	Route::get('/barang','BarangController@listItems')->name('barangs');
	Route::get('/getAll','BarangController@getAll');
//13may
	Route::get('/detailbarang','BarangController@detailbarang')->name('barangs_detail');

	/*
	Route::get('/detailbarang/{id}', 'BarangController@getDetailBarang');
	Route::post('/detailbarangs','BarangController@updateDetailBarang');
	*/
//
	Route::get('/baranglelang/{id}', 'BarangController@getBarangLelang');
	Route::post('/baranglelangs','BarangController@updateBarangLelang');

	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::post('/editprofile', 'HomeController@store');

	Route::get('/make','LelangController@make')->name('make');
	Route::post('/lelangBuat','LelangController@addLelang')->name('lelang_store');
	Route::post('/changeStatus','LelangController@changeStatus');
});

Route::group(['middleware' => ['admin']], function() {
	Route::get('/kelola-barang','AdminController@barang')->name('kelola_barang');
});