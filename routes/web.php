<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');
Route::get('/data-mobil','DataMobilController@index')->name('data-mobil');
Route::get('/data-mobil/tambah','DataMobilController@tambah')->name('data-mobil.tambah');
Route::post('/data-mobil/tambah','DataMobilController@tambah_post')->name('data-mobil.tambah_post');
Route::get('/data-mobil/hapus/{id}','DataMobilController@hapus')->name('data-mobil.hapus');
Route::get('/data-mobil/edit/{id}','DataMobilController@edit')->name('data-mobil.edit');
Route::post('/data-mobil/edit','DataMobilController@edit_post')->name('data-mobil.edit_post');

Route::get('/data-penjualan','DataPenjualanController@index')->name('data-penjualan');
Route::get('/data-penjualan/tambah','DataPenjualanController@tambah')->name('data-penjualan.tambah');
Route::post('/data-penjualan/tambah','DataPenjualanController@tambah_post')->name('data-penjualan.tambah_post');
