<?php

use App\Http\Controllers\Api\KegiatanApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\InfoPendaftaranApiController;
use App\Http\Controllers\Api\PembinaApiController;
use App\Http\Controllers\Api\ProfilSekolahApiController;
use App\Http\Controllers\Api\TugasPekananApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(KegiatanApiController::class)->group(function () {
    Route::get('/kegiatan', 'index');
    Route::get('/kegiatan/detail/{id}', 'detail');
});
Route::controller(ProfilSekolahApiController::class)->group(function () {
    Route::get('/profile', 'index');
});
Route::controller(InfoPendaftaranApiController::class)->group(function () {
    Route::get('/info', 'index');
});
Route::controller(TugasPekananApiController::class)->group(function () {
    Route::get('/tugas', 'index');
    Route::get('/tugas/detail/{id}', 'detail');
});
Route::controller(PembinaApiController::class)->group(function () {
    Route::get('/pembina', 'pembina');
    Route::post('/tambah/pembina', 'tambahPembina');
    Route::delete('/hapus/pembina/{id}', 'hapusPembina');
    Route::put('/update/pembina/{id}', 'updatePembina');
});

Route::controller(AuthApiController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});