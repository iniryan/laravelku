<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BayarController;

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/berita', [PegawaiController::class, 'index']);
Route::get('/bayar', [BayarController::class, 'index']);

Route::get('/bayar/add', [BayarController::class, 'create']);
Route::post('/bayar', [BayarController::class, 'store']);

Route::get('/bayar/{id}/edit', [BayarController::class, 'edit']);
Route::put('/bayar/{id}', [BayarController::class, 'update']);

// Route::get('/bayar/delete/{id}', [BayarController::class, 'destroy']);
Route::delete('/bayar/{id}', [BayarController::class, 'destroy']);


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
