<?php

use App\Http\Controllers\DashboardController;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use App\Models\Dosen;
use App\Models\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

// logout
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

// Tampilan Dashboard
Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('/dashboard/tampil', [KategoriController::class, 'index']);
    Route::get('/dashboard/tampil/kriteria/{kategori:id}', [KriteriaController::class, 'index']);
    Route::get('/dashboard/tampil/kriteria/{kategori:id}/pertanyaan/{kriteria:id}', [PertanyaanController::class, 'index']);
});

Route::get('/dashboard/user', [UserController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'jumlah']);

//crud pertanyaan
Route::post('/create', [PertanyaanController::class, 'create']);
Route::put('/update/{pertanyaan}', [PertanyaanController::class, 'update']);
Route::delete('/hapus/{pertanyaan}', [PertanyaanController::class, 'destroy']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dosen', [PertanyaanController::class, 'dosen']);
    Route::get('/pengguna-lulusan', [PertanyaanController::class, 'penggunalulusan']);
    Route::get('/alumni', [PertanyaanController::class, 'alumni']);
    Route::get('/tendik', [PertanyaanController::class, 'tenegakependidikan']);
    Route::get('/mahasiswa', [PertanyaanController::class, 'mahasiswa']);
    Route::get('/mitra', [PertanyaanController::class, 'mitra']);
});

// Route::get('/profile/{userType}-{nama_lengkap}', [DosenController::class, 'dosen']);

Route::post('/pengguna-lulusan', [JawabanController::class, 'store']);
Route::post('/dosen', [JawabanController::class, 'store']);
Route::post('/alumni', [JawabanController::class, 'store']);

// hapus akun
Route::delete('/delete/{id}', [UserController::class, 'destroy']);
