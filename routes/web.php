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
//     return view('auth.login');
// });


Route::get('/', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
	Route::resource('jenis','JenisController');
	Route::resource('supplier','SupplierController');
	Route::resource('barang','BarangController');
	Route::resource('pembelian','PembelianController');
	Route::resource('transaksi','TransaksiController');
});
Auth::routes();
