<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/siswa/soal1', [SiswaController::class, 'soal1']);
Route::get('/siswa/soal2', [SiswaController::class, 'soal2']);
Route::get('/siswa/soal3', [SiswaController::class, 'soal3']);
Route::get('/siswa/soal4', [SiswaController::class, 'soal4']);