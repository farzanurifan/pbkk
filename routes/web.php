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

Route::get('/', 'LelangController@index')->name('landing');

Auth::routes(['verify' => true]);

Route::get('/kategori', 'LelangController@kategori')->name('kategori');
Route::get('/kategori/{kat}', 'LelangController@searchByKatt');
Route::get('/kategori/searchByKat/{kat}', 'LelangController@searchByKategori');
Route::get('/searchByKat/{id}', 'LelangController@searchByKategori');
Route::post('/search','BarangController@search')->name('searchItem');
Route::get('/filterbarang', 'HomeController@filterbarang')->name('filterbarang');
Route::get('/beranda', 'LelangController@allLelang')->name('beranda');


Route::middleware(['auth'])->group(function(){
	Route::get('/home', 'LelangController@index')->name('home');
	Route::get('/lelang/{id}','LelangController@detail');
});

Route::middleware(['auth','verified'])->group(function(){
	Route::get('/barangBuat','BarangController@addItems')->name('barangs_make');
	Route::post('/barangSimpan','BarangController@storeItems')->name('barangs_store');
	Route::post('/barangHapus','BarangController@delItems');
	Route::get('/barang','BarangController@listItems')->name('barangs');
	Route::get('/getAll','BarangController@getAll');

	Route::get('/detailbarang',function(){
		return view('pages.barang.detailbarang');
	})->name('barangs_detail');

	Route::get('/historipenawaran','HistoriPenawaranController@index')->name('historipenawaran');


	Route::get('/baranglelang/{id}', 'BarangController@getBarangLelang');
	Route::get('/lelang/baranglelang/{id}', 'BarangController@getBarangLelang');
	Route::post('/lelang/stat/changeStatus','LelangController@changeStatus');
	Route::post('/baranglelangs','BarangController@updateBarangLelang');

	Route::get('/profile', 'HomeController@profile')->name('profile');
	
	Route::post('/updatepp','HomeController@updatepp');
	Route::post('/editprofile', 'HomeController@store');
	Route::post('/editpassword','HomeController@updatepw');

	Route::get('/make','LelangController@make')->name('make');
	Route::post('/lelangBuat','LelangController@addLelang')->name('lelang_store');
	Route::post('/changeStatus','LelangController@changeStatus');

	Route::post('/toTrans','LelangController@changeStatusBeli');
	Route::post('/lelang/updateBid','LelangController@updateHarga');
	Route::get('/beli','LelangController@beliShow')->name('kelola_barang_beli');
	Route::get('/jual','LelangController@jualShow')->name('kelola_barang_jual');
	Route::post('/belilelang','LelangController@beli')->name('lelang_barang_beli');
	Route::post('/juallelang','LelangController@jual')->name('lelang_barang_jual');
});

Route::group(['middleware' => ['admin']], function() {
	Route::get('/kelola-barang','AdminController@barang')->name('kelola_barang');
	Route::get('/histori-penawaran','AdminController@barang')->name('histori_penawaran');
});