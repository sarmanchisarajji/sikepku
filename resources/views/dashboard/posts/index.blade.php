@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container col-lg-12">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="font-size: 16px">
                <span class="text-muted fw-light">Tabel /</span> Daftar Kategori Pertanyaan
                <a href="/dashboard/tampil"
                    class="float-end{{ Request::is('dashboard/tampil') ? ' text-primary' : ' text-muted' }}">Kategori</a>
                <a href="/dashboard" class="float-end text-muted fw-light">Dashboard/</a>
            </h4>
            <div class="card">
                <div class="table-responsive text-nowrap text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="fw-bolder">Kategori</th>
                                <th class="fw-bolder">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($kategories as $ktg)
                                <tr>
                                    <td>
                                        @if ($ktg->nama_kategori === 'Pengguna Lulusan')
                                            <span class="badge bg-label-warning me-1">{{ $ktg->nama_kategori }}</span>
                                        @elseif ($ktg->nama_kategori === 'Alumni')
                                            <span class="badge bg-label-info me-1">{{ $ktg->nama_kategori }}</span>
                                        @elseif ($ktg->nama_kategori === 'Tenaga Kependidikan')
                                            <span class="badge bg-label-success me-1">{{ $ktg->nama_kategori }}</span>
                                        @elseif ($ktg->nama_kategori === 'Mahasiswa')
                                            <span class="badge bg-label-primary me-1">{{ $ktg->nama_kategori }}</span>
                                        @elseif ($ktg->nama_kategori === 'Dosen')
                                            <span class="badge bg-label-dark me-1">{{ $ktg->nama_kategori }}</span>
                                        @else
                                            <span class="badge bg-label-danger me-1">{{ $ktg->nama_kategori }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="/dashboard/tampil/kriteria/{{ $ktg->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                    Selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="/dashboard/tampil/kategori/{{ $ktg->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                    Selengkapnya
                                                </a>
                                            </div>
                                        </div> --}}

                                        {{-- <a href="#" class="badge bg-danger">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="badge bg-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
