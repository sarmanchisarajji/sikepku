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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/posts-soal', function () {
    return view('dashboard.posts.tambah');
});

Route::get('/dashboard/tampil-soal', function () {
    return view('dashboard.posts.index');
});
