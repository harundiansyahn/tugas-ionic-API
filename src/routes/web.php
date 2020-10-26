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

/* Route::get('/', function () {
    return view('mahasiswa');
})->name('mahasiswa.index'); */

Route::POST('/mahasiswa/simpan',[\App\Http\Controllers\MahasiswaController::class,'simpan'])
    ->name('mahasiswa.simpan');

Route::get('/', [\App\Http\Controllers\MahasiswaController::class,'index'])
    ->name('mahasiswa.index');

