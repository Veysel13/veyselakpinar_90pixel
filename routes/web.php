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


//dosya yükleyerek  exceli aktarma
Route::get('/','Home\HomeController@index');
Route::get('/data-transfer','Home\HomeController@index');
Route::post('/add','Home\HomeController@datatransfer');

//ftp baglantısı yapılarak exceli aktarma
Route::get('/hookurl','Home\HomeController@hookurl');
Route::get('/nestedcategory','Home\HomeController@nested');
