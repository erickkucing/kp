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

Route::any('/', array('as' => 'home', 'uses' => 'FrontendController@showIndex'));
Route::any('/login', array('as' => 'login', 'uses' => 'FrontendController@showLogin'));
Route::any('/loginn', array('as' => 'loginn', 'uses' => 'FrontendController@showLoginn'));
Route::any('/checkout', array('as' => 'checkout', 'uses' => 'FrontendController@showCheckout'));
Route::any('/details/{id}', array('as' => 'details', 'uses' => 'FrontendController@showDetails'));
Route::any('/kategori/{id}/{kategori}', array('as' => 'kategori', 'uses' => 'FrontendController@showKategori'));
Route::any('/all', array('as' => 'all', 'uses' => 'FrontendController@showAllKategori'));
Route::any('/tambahPembeli', array('as' => 'tambahPembeli', 'uses' => 'FrontendController@tambahPembeli'));
Route::any('home', array('as' => 'home', 'uses' => 'FrontendController@showIndex'));


Route::group(array('before' => 'auth'), function(){ 
	
});