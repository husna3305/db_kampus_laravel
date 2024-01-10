<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name("tambahMahasiswa");
Route::post('mahasiswa/tambah', [MahasiswaController::class, 'simpanTambah'])->name("simpanTambahMahasiswa");
Route::get('mahasiswa/ubah/{id}', [MahasiswaController::class, 'ubah'])->name("ubahMahasiswa");
Route::post('mahasiswa/ubah/{id}', [MahasiswaController::class, 'simpanUbah'])->name("simpanUbahMahasiswa");
