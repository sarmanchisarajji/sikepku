@extends('auth.layouts.main')
@section('login-daftar')
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
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

                    <div class="align-items-center justify-content-between mb-4">
                        {{-- <a href="/daftar" class=""> --}}
                        <h3 class="text-primary"><i></i>SikepKu</h3>
                        {{-- </a> --}}
                    </div>
                    <h5 class="text-center my-3" style="color: #19376D">Silahkan Login</h5>
                    <form action="/login" method="post" class="text-center">
                        @csrf
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
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            {{-- <div class="form-check"> --}}
                            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                            {{-- </div> --}}
                            {{-- <a href="">Lupa password</a> --}}
                        </div>
                        <button type="submit" class="btn btn-primary w-50 mb-4">Masuk</button>
                    </form>
                    <p class="text-center mb-0">Belum mempunyai akun? <a href="/daftar">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
@endsection
