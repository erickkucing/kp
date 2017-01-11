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
	
	Route::any('/homeAdmin', array('as' => 'homeAdmin', 'uses' => 'IndexController@showIndex'));
	Route::any('/pembeli', array('as' => 'pembeli', 'uses' => 'IndexController@showPembeli'));
	Route::any('/produk', array('as' => 'produk', 'uses' => 'IndexController@showProduk'));
	Route::any('/kategori', array('as' => 'kategori', 'uses' => 'IndexController@showKategori'));
	Route::any('/subkategori', array('as' => 'subkategori', 'uses' => 'IndexController@showSubkategori'));
	Route::any('/penjual', array('as' => 'penjual', 'uses' => 'IndexController@showPenjual'));
	Route::any('/gambar', array('as' => 'gambar', 'uses' => 'IndexController@showGambar'));
	Route::any('/daftar-penjual', array('as' => 'daftar-penjual', 'uses' => 'IndexController@showDaftarPenjual'));
	Route::any('/daftar-gambar', array('as' => 'daftar-gambar', 'uses' => 'IndexController@showDaftarGambar'));
	Route::any('/ubah-penjual/{id}', array('as' => 'ubah-penjual', 'uses' => 'IndexController@ubahPenjual'));
	Route::any('/ubah-pembeli/{id}', array('as' => 'ubah-pembeli', 'uses' => 'IndexController@ubahPembeli'));
	Route::any('/ubah-status-customer/{id}', array('as' => 'ubah-status', 'uses' => 'IndexController@ubahStatusCust'));
	Route::any('/admin', array('as' => 'admin', 'uses' => 'IndexController@showAdmin'));
	Route::any('/daftar-kategori', array('as' => 'daftar-kategori', 'uses' => 'IndexController@showDaftarKategori'));
	Route::any('/daftar-subkategori', array('as' => 'daftar-subkategori', 'uses' => 'IndexController@showDaftarSubkategori'));
	Route::any('/ubah-kategori/{id}', array('as' => 'ubah-kategori', 'uses' => 'IndexController@ubahKategori'));
	Route::any('/daftar-admin', array('as' => 'daftar-admin', 'uses' => 'IndexController@showDaftarAdmin'));
	Route::any('/ubah-admin/{id}', array('as' => 'ubah-admin', 'uses' => 'IndexController@ubahAdmin'));
	Route::any('/ubah-subkategori/{id}', array('as' => 'ubah-subkategori', 'uses' => 'IndexController@ubahSubkategori'));
	Route::any('/delete-subkategori/{id}', array('as' => 'delete-subkategori', 'uses' => 'IndexController@deleteSubkategori'));
	Route::any('/delete-admin/{id}', array('as' => 'delete-admin', 'uses' => 'IndexController@deleteAdmin'));
	Route::any('/delete-gambar/{id}', array('as' => 'delete-gambar', 'uses' => 'IndexController@deleteGambar'));
	Route::any('/delete-penjual/{id}', array('as' => 'delete-penjual', 'uses' => 'IndexController@deletePenjual'));
	Route::any('/delete-kategori/{id}', array('as' => 'delete-kategori', 'uses' => 'IndexController@deletekategori'));
});