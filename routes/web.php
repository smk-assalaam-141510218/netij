<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::resource('jabatan','JabatanController');
Route::resource('golongan','GolonganController');
Route::resource('pegawai','PegawaiController');
Route::resource('lembur-kategori','KategoriLemburController');
Route::resource('lembur-pegawai','LemburPegawaiController');
Route::resource('tunjangan','TunjanganController');
Route::resource('tunjangan-pegawai','TunjanganPegawaiController');
Route::resource('penggajian','PenggajianController');