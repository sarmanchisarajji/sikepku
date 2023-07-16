@extends('auth.layouts.main')
@section('main-content')
    <!-------------------- ------ Right Box ---------------------------->
    <div class="col-md-6 right-box">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('question/assets/img/brand/logo-brand2.svg') }}" alt="brand">
            <img src="{{ asset('question/assets/img/brand/logo-uho.svg') }}" alt="brand">
        </a>
        <div class="row align-items-center mt-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-message').remove();
                    }, 1500);
                </script>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-message">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('error-message').remove();
                    }, 1500);
                </script>
            @endif
            <div class="header-text mb-4">
                <h2>Selamat Datang Kembali Di SikapKu</h2>
                <p class="mt-3">Ayo, mari isi survei untuk meningkatkan pengalaman akademik yang lebih baik
                    lagi!
                </p>
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text"
                        class="form-control @error('nim') is-invalid @enderror form-control-lg bg-light fs-6" id="nim"
                        name="nim" placeholder="Masukkan NIM/NIDN" value="{{ old('nim') }}" required>
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-1">
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror form-control-lg bg-light fs-6"
                        id="password" name="password" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                Me</small></label>
                    </div>
                    <div class="forgot">
                        <small>
                            <a href="#" style="text-decoration: none">Forgot Password?</a>
                        </small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit"
                        style="background-color: #2E44D0;">Login</button>
                </div>
            </form>
            <div class="row">
                <small class="d-flex justify-content-center mb-5">Don't have
                    account?
                    <a href="/register" style="text-decoration: none">SignUp</a>
                </small>
            </div>
        </div>
    </div>
    <!--------------------------- Left Box ----------------------------->
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
        style="background: #2E44D0;">
        <div class="featured-image mb-3">
            <img src="{{ asset('question/assets/svg/signin.svg') }}" class="img-fluid" style="width: 250px;">
        </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
            Verifikasi Survei</p>
        <small class="text-white text-wrap text-center"
            style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Jadilah bagian dari kami dan
            berikan suaramu dalam survei ini!</small>
    </div>
@endsection
