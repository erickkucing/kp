<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//routing khusus client
//home routing'));

Route::any('/', array('as' => 'login', 'uses' => 'userController@showLogin'));

Route::group(array('before' => 'auth'), function(){ 

	Route::any('/home', array('as' => 'home', 'uses' => 'IndexController@showIndex'));
	Route::any('/rekap', array('as' => 'rekap', 'uses' => 'IndexController@showRekap'));
	Route::any('/produk', array('as' => 'produk', 'uses' => 'IndexController@showProduk'));
	Route::any('/transaksi', array('as' => 'transaksi', 'uses' => 'IndexController@showTrans'));
	Route::any('/transaksi-all', array('as' => 'transaksi-all', 'uses' => 'IndexController@showTransAll'));
	Route::any('/daftar-produk', array('as' => 'daftar-produk', 'uses' => 'IndexController@showDaftarProduk'));
	Route::any('/ubah-produk/{id}', array('as' => 'ubah-produk', 'uses' => 'IndexController@ShowUbahProduk'));
	Route::any('/delete-gambar/{id}', array('as' => 'delete-gambar', 'uses' => 'IndexController@deleteGambar'));


	Route::any('/kategori', array('as' => 'kategori', 'uses' => 'IndexController@showKategori'));
	Route::any('/subkategori', array('as' => 'subkategori', 'uses' => 'IndexController@showSubkategori'));
	Route::any('/penjual', array('as' => 'penjual', 'uses' => 'IndexController@showPenjual'));
	Route::any('/daftar-penjual', array('as' => 'daftar-penjual', 'uses' => 'IndexController@showDaftarPenjual'));
	Route::any('/ubah-penjual/{id}', array('as' => 'ubah-penjual', 'uses' => 'IndexController@ubahPenjual'));
	Route::any('/admin', array('as' => 'admin', 'uses' => 'IndexController@showAdmin'));
	Route::any('/daftar-kategori', array('as' => 'daftar-kategori', 'uses' => 'IndexController@showDaftarKategori'));
	Route::any('/daftar-subkategori', array('as' => 'daftar-subkategori', 'uses' => 'IndexController@showDaftarSubkategori'));
	Route::any('/ubah-kategori/{id}', array('as' => 'ubah-kategori', 'uses' => 'IndexController@ubahKategori'));
	Route::any('/daftar-admin', array('as' => 'daftar-admin', 'uses' => 'IndexController@showDaftarAdmin'));
	Route::any('/ubah-admin/{id}', array('as' => 'ubah-admin', 'uses' => 'IndexController@ubahAdmin'));
	Route::any('/ubah-subkategori/{id}', array('as' => 'ubah-subkategori', 'uses' => 'IndexController@ubahSubkategori'));
	Route::any('/delete-subkategori/{id}', array('as' => 'delete-subkategori', 'uses' => 'IndexController@deleteSubkategori'));
	Route::any('/delete-kategori/{id}', array('as' => 'delete-kategori', 'uses' => 'IndexController@deletekategori'));
});