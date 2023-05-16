<?php

use App\Http\Controllers\PakaianAdatController;
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

Route::get('/', [PakaianAdatController::class, 'index']);
Route::get('/tambah', [PakaianAdatController::class, 'tambah']);
Route::post('/tambah', [PakaianAdatController::class, 'store']);
Route::get('/hapus/{id}', [PakaianAdatController::class, 'hapus']);
Route::get('/edit/{id}', [PakaianAdatController::class, 'edit']);
Route::post('/edit/{id}', [PakaianAdatController::class, 'update']);
Route::get('/lihat/{id}', [PakaianAdatController::class, 'lihat']) ;
