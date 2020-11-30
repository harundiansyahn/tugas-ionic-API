<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\AbsensiController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/kelas/form',[KelasController::class,'tampilform'])
        ->name("kelas.form");

    Route::get('/kelas/list',[KelasController::class,'tampillist'])
        ->name("kelas.list");

    Route::get('/kelas/hapus/{id}',[KelasController::Class,'hapuskelas'])
        ->name("kelas.hapus");

    Route::post('/kelas/create',[KelasController::Class,'buatkelas'])
        ->name("kelas.create");

    Route::get('/pertemuan/form',[PertemuanController::class,'tampilform'])
        ->name("pertemuan.form");

    Route::get('/peserta/invite',[PesertaController::class,'tampil_form_email'])
        ->name("peserta.invite");

    /* Route::view('/peserta/detail','user.detail')
            ->name("peserta.detail"); */

    Route::get('/peserta/detail',[PesertaController::class,'tampil_detail_peserta'])
        ->name("peserta.detail");

    Route::get('absensi/form',[AbsensiController::class,'tampil_form_absensi'])
        ->name("absensi.form");
});


