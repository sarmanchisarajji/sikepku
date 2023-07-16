@extends('dashboard.layouts.main')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="h2 fw-bold py-3 mb-4" style="font-size: 18px">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- <span class="welcome-text" style="white-space: nowrap; flex-shrink: 0;">Welcome back,
                        {{ Auth::user()->nama_lengkap }}</span> --}}
                    <span class="welcome-text" style="white-space: nowrap; flex-shrink: 0;">Selamat Datang,
                        {{ Auth::user()->nama_lengkap }}
                    </span>
                    <a href="/dashboard"
                        class="text-end{{ Request::is('dashboard') ? 'text-primary' : 'text-muted' }}">Dashboard</a>
                </div>
                <style>
                    @media (max-width: 576px) {
                        .welcome-text {
                            font-size: 20px;
                        }

                        .dashboard-link {
                            display: none;
                        }
                    }
                </style>
            </h4>
            {{-- <div class="col-lg-8 col-md-8 order-2">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card border-primary">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-people"></i> Pengguna Lulusan</h5>
                                <p class="card-text fw-light d-inline">Jumlah Soal :
                                    {{ $jmlSoalPenggunaLulusan }}
                                </p>
                                <p class="card-text d-inline ms-3">Jumlah Kriteria :
                                    {{ $jmlKriteriaPenggunaLulusan }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Alumni</h5>
                                <p class="card-text text-white fw-light d-inline">Jumlah Soal : {{ $jmlSoalAlumni }}</p>
                                <p class="card-text text-dark d-inline ms-3">Jumlah Kriteria :
                                    {{ $jmlKriteriaAlumni }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Tenaga Kependidikan
                                </h5>
                                <p class="card-text text-white fw-light d-inline">Jumlah Soal : {{ $jmlSoalTendik }}</p>
                                <p class="card-text text-dark d-inline ms-3">Jumlah Kriteria :
                                    {{ $jmlKriteriaTendik }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Mahasiswa</h5>
                                <p class="card-text text-white fw-light d-inline">Jumlah Soal : {{ $jmlSoalMahasiswa }}</p>
                                <p class="card-text text-dark d-inline ms-2">Jumlah Kriteria :
                                    {{ $jmlKriteriaMahasiswa }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Dosen</h5>
                                <p class="card-text text-white fw-light d-inline">Jumlah Soal : {{ $jmlSoalDosen }}</p>
                                <p class="card-text text-dark d-inline ms-2">Jumlah Kriteria :
                                    {{ $jmlKriteriaDosen }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><i class="bi bi-people"></i> Mitra</h5>
                                <p class="card-text text-white fw-light d-inline">Jumlah Soal : {{ $jmlSoalMitra }}</p>
                                <p class="card-text text-dark d-inline ms-2">Jumlah Kriteria :
                                    {{ $jmlKriteriaMitra }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-12 col-md-8 col-lg-8 order-1 mb-4">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-warning rounded-pill">
                                                <i class="bi bi-people"></i> Pengguna Lulusan
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalPenggunaLulusan }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end ms-5">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaPenggunaLulusan }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-info rounded-pill">
                                                <i class="bi bi-people"></i> Alumni
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalAlumni }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end ms-5">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaAlumni }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-success rounded-pill">
                                                <i class="bi bi-people"></i> Tenaga Kependidikan
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50 me-3">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalTendik }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end align-items-end ms-4">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaTendik }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-primary rounded-pill">
                                                <i class="bi bi-people"></i> Mahasiswa
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50 me-3">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalMahasiswa }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end align-items-end ms-4">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaMahasiswa }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-dark rounded-pill">
                                                <i class="bi bi-people"></i> Dosen
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50 me-3">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalDosen }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end align-items-end ms-4">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaDosen }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="align-items-start justify-content-start">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2 badge bg-label-danger rounded-pill">
                                                <i class="bi bi-people"></i> Mitra
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="w-50 me-3">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Soal: {{ $jmlSoalMitra }}
                                                </small>
                                            </div>
                                            <div class="w-50 text-end align-items-end ms-4">
                                                <small class="text-dark text-nowrap fw-semibold text-muted"
                                                    style="font-size: 14px">
                                                    Jumlah Kriteria: {{ $jmlKriteriaMitra }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transactions -->
            <div class="col-md-4 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Monitoring Responden</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0 align-items-start">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('') }}img/icons/unicons/paypal.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Target Jumlah</small>
                                        <h6 class="mb-0">Responden</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">150</h6>
                                        <span class="text-muted">Orang</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('') }}img/icons/unicons/wallet.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Jumlah Pengisi</small>
                                        <h6 class="mb-0">Kusioner</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">100</h6>
                                        <span class="text-muted">Orang</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('') }}img/icons/unicons/chart.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Presentasi Pengisian</small>
                                        <h6 class="mb-0">Kusioner</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">66</h6>
                                        <span class="text-muted">%</span>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('') }}img/icons/unicons/chart.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Presentasi Pengisian</small>
                                        <h6 class="mb-0">Kusioner</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">66</h6>
                                        <span class="text-muted">%</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('') }}img/icons/unicons/chart.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Presentasi Pengisian</small>
                                        <h6 class="mb-0">Kusioner</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">66</h6>
                                        <span class="text-muted">%</span>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
@endsection
