<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/buku','App\Http\Controllers\BukuController@index');

Route::get('/pegawai','App\Http\Controllers\pegawaiController@index');

Route::get('/tambah','App\Http\Controllers\BukuController@index');

Route::post('/buku/tambah','App\Http\Controllers\BukuController@tambah_buku');