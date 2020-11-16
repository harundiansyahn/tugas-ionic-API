<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PertemuanController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/kelas/form',[KelasController::class,'tampilform'])
    ->name("kelas.form");

Route::get('/kelas/list',[KelasController::class,'tampillist'])
    ->name("kelas.list");

Route::get('/pertemuan/form',[PertemuanController::class,'tampilform'])
    ->name("pertemuan.form");
