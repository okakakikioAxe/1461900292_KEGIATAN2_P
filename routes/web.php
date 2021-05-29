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
