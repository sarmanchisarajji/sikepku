<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


// ROUTE COBA EXPORT
Route::get('/tes/{kriteriaId}', [CobaController::class, 'index']);
// Route::get('/export2', [CobaController::class, 'index2']);

Route::get('/export/{kriteriaId}', [CobaController::class, 'export'])->name('export');

// regster
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

// login
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// logout
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

// Tampilan Dashboard
Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('/dashboard/tampil', [KategoriController::class, 'index']);
    Route::get('/dashboard/tampil/kriteria/{kategori:id}', [KriteriaController::class, 'index']);

    //crud pertanyaan
    Route::get('/dashboard/tampil/kriteria/{kategori:id}/pertanyaan/{kriteria:id}', [PertanyaanController::class, 'index']);
    Route::post('/create', [PertanyaanController::class, 'create']);
    Route::put('/update/{pertanyaan}', [PertanyaanController::class, 'update']);
    Route::delete('/hapus/{pertanyaan}/{kriteria}/{kategori}', [PertanyaanController::class, 'destroy']);
    // Route::get('/hapus/{pertanyaan}', [PertanyaanController::class, 'destroy'])->name('hapus.destroy');

    Route::get('/dashboard', [DashboardController::class, 'jumlah']);
    Route::get('/dashboard/user', [UserController::class, 'index']);
    Route::get('/dashboard/admin', [AdminController::class, 'index']);


    // crud tambah akun user
    Route::post('/dashboard/user/create', [UserController::class, 'create']);
    // Route::get('/get-user/{id}', [UserController::class, 'getData']);
    Route::put('/edit/{id}', [UserController::class, 'update']);
    Route::delete('/delete/{id}', [UserController::class, 'destroy']);

    //csv
    Route::get('/import-csv', [UserController::class, 'showImportForm']);
    Route::post('/import-csv', [UserController::class, 'importCSV']);

    // crud tambah akun admin
    Route::post('/add', [AdminController::class, 'tambah']);
    Route::put('/upTodate/{id}', [AdminController::class, 'upTodate']);
    Route::delete('/destroy/{id}', [AdminController::class, 'hapus']);

    //
    Route::get('/grafik-kepuasan', [ChartController::class, 'index']);
    Route::get('/tentang', function () {
        return view('posts.tentang');
    });
});


// halaman masing - masing user
Route::middleware(['auth'])->group(function () {
    Route::get('/dosen', [PertanyaanController::class, 'dosen']);
    Route::get('/pengguna-lulusan', [PertanyaanController::class, 'penggunalulusan']);
    Route::get('/alumni', [PertanyaanController::class, 'alumni']);
    Route::get('/tenaga-kependidikan', [PertanyaanController::class, 'tenagakependidikan']);
    Route::get('/mahasiswa', [PertanyaanController::class, 'mahasiswa']);
    Route::get('/mitra', [PertanyaanController::class, 'mitra']);

    Route::get('/thanks', [JawabanController::class, 'jawabanTerisi'])->name('thanks');

    // simpan jawaban
    Route::post('/{usertype}', [JawabanController::class, 'store']);
});
