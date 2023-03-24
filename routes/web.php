<?php

use App\Models\Kategori;
use App\Models\Pertanyaan;
use App\Models\Dosen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PertanyaanController;


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/dashboard/posts-soal', function () {
//     return view('dashboard.posts.tambah');
// });

// Route::get('/dashboard/tampil', function () {
//     return view('dashboard.posts.index', [
//         'kategories' => Kategori::all()
//     ]);
// });

// Route::get('/dashboard/tampil/kategori/{kategori:id}', function (Kategori $kategori) {
//     return view('dashboard.posts.pertanyaan', [
//         'pertanyaans' => $kategori->pertanyaan
//     ]);
// });

Route::get('/dashboard/tampil/kategori/{kategori:id}', [PertanyaanController::class, 'index']);
Route::get('/dashboard/tampil', [KategoriController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index-dosen']);


Route::post('/create', [PertanyaanController::class, 'create']);
Route::put('/update/{id}', [PertanyaanController::class, 'update']);
Route::get('/hapus/{id}', [PertanyaanController::class, 'destroy']);
