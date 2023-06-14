@extends('auth.layouts.main')
@section('login-daftar')
    {{-- <div class="container-xxl position-relative bg-white d-flex p-0"> --}}
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="align-items-center justify-content-between mb-4">
                        {{-- <a href="/login" class=""> --}}
                        <h3 class="text-primary"><i></i>SIKEPKU</h3>
                        {{-- </a> --}}
                    </div>
                    <h5 class="text-center my-3" style="color: #19376D">Silahkan Daftar</h5>
                    <form action="/daftar" method="post" class="text-center">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                placeholder="Sarman Chisara" autofocus required value="{{ old('nama_lengkap') }}">
                            <label for="nama_lengkap">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="sarman chisara" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="sarman@gmail.com" autofocus required
                                value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" autofocus required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="tbl_jurusan_id" name="tbl_jurusan_id"
                                aria-label="Floating label select example" required autofocus>
                                {{-- <option selected>Open this select menu</option> --}}
                                <option value="1">Teknik Arsitektur</option>
                                <option value="2">Teknik Elektro</option>
                                <option value="3">Teknik Informatika</option>
                                <option value="4">Teknik Mesin</option>
                                <option value="5">Teknik Sipil</option>
                                <option value="6">Rekayasa Infrastruktur & Lingkungan</option>
                                <option value="7">Teknik Kelautan</option>
                            </select>
                            <label for="tbl_jurusan_id">Jurusan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                aria-label="Floating label select example" required autofocus>
                                {{-- <option selected>Open this select menu</option> --}}
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="user_type" name="user_type"
                                aria-label="Floating label select example" required autofocus>
                                <option value="pengguna_lulusan">Pengguna Lulusan</option>
                                <option value="alumni">Alumni</option>
                                <option value="tenaga_kependidikan">Tenaga Kependidikan</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="dosen">Dosen</option>
                                <option value="mitra">Mitra</option>
                            </select>
                            <label for="user_type">Kategori Pengguna</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="alamat" id="alamat" rows="5" autofocus required
                                placeholder="Jl. Sugi Manuru" value="{{ old('alamat') }}"></textarea>
                            {{-- <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required> --}}
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="no_hp" class="form-control" id="no_hp"
                                placeholder="085255938568" autofocus required value="{{ old('no_hp') }}">
                            <label for="no_hp">Telepon</label>
                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"></label>
                                </div>
                                <a href="/lupapasssword" class="fs-12">Lupa password</a>
                            </div> --}}
                        <button type="submit" class="btn btn-primary w-50 mb-4">Daftar</button>
                    </form>
                    <p class="text-center mb-0">Sudah punya akun? <a href="/login">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
    {{-- </div> --}}
@endsection
