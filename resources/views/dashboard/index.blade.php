{{-- @extends('dashboard.layouts.main')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="h2 fw-bold py-3 mb-4" style="font-size: 20px">Welcome back, {{ Auth::user()->nama_lengkap }}
            <a href="/dashboard"
                class="float-end{{ Request::is('dashboard') ? ' text-primary' : ' text-muted' }}">Dashboard</a>
        </h2>
    </div>
@endsection --}}

@extends('dashboard.layouts.main')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="h2 fw-bold py-3 mb-4" style="font-size: 20px">Welcome back, {{ Auth::user()->nama_lengkap }}
            <a href="/dashboard"
                class="float-end{{ Request::is('dashboard') ? ' text-primary' : ' text-muted' }}">Dashboard</a>
        </h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Pengguna Lulusan</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalPenggunaLulusan }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Alumni</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalAlumni }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Tenaga Kependidikan</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalTendik }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-danger">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Mahasiswa</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalMahasiswa }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Dosen</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalDosen }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Mitra</h5>
                        <p class="card-text text-white fw-light">Jumlah : {{ $jmlSoalMitra }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
