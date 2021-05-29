<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
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

Route::get('/', [PageController::class,'home']);

Route::get('/data/buku', [DataController::class,'ms_buku']);
Route::get('/data/detail_pinjam', [DataController::class,'ms_detail_pinjam']);
Route::get('/data/kartu_pendaftaran', [DataController::class,'ms_kartu_pendaftaran']);
Route::get('/data/kategori', [DataController::class,'ms_kategori']);
Route::get('/data/peminjam', [DataController::class,'ms_peminjam']);
Route::get('/data/peminjaman', [DataController::class,'ms_peminjaman']);
Route::get('/data/penerbit', [DataController::class,'ms_penerbit']);
Route::get('/data/petugas', [DataController::class,'ms_petugas']);

Route::get('/data/cari', [DataController::class,'cari']);
