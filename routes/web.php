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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PagesPerpustakaan@index');
Route::get('/daftarbuku', 'PagesPerpustakaan@daftar');
Route::get('/pengunjung', 'PagesPerpustakaan@pengunjung');
Route::get('/data_peminjam', 'PagesPerpustakaan@detail');
Route::get('/data_peminjam/cari', 'PagesPerpustakaan@cari');

