@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container col-lg-12">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="font-size: 16px"><span class="text-muted fw-light">Tabel /</span> Daftar
                Kriteria Pertanyaan
                <a href="/dashboard/tampil/kriteria/{{ $kriteriaId }}"
                    class="float-end fs-12{{ Request::is('dashboard/tampil/kriteria/*') ? ' text-primary' : ' text-muted' }}">Kriteria</a>
                <a href="/dashboard/tampil" class="float-end fs-12 text-muted fw-light">Kategori/</a>
                <a href="/dashboard" class="float-end fs-12 text-muted fw-light">Dashboard/</a>
            </h4>
            <div class="card">
                <div class="table-responsive text-nowrap text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="fw-bolder">Kriteria</th>
                                <th class="fw-bolder">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($kriterias as $krt)
                                <tr>
                                    <td>
                                        @if ($krt->nama_kriteria === 'Kriteria Tata Pamong')
                                            <span class="badge bg-label-warning me-1">{{ $krt->nama_kriteria }}</span>
                                        @elseif ($krt->nama_kriteria === 'Kriteria Mahasiswa')
                                            <span class="badge bg-label-info me-1">{{ $krt->nama_kriteria }}</span>
                                        @elseif ($krt->nama_kriteria === 'Kriteria Sumber Daya Manusia')
                                            <span class="badge bg-label-success me-1">{{ $krt->nama_kriteria }}</span>
                                        @elseif ($krt->nama_kriteria === 'Kriteria Keuangan')
                                            <span class="badge bg-label-primary me-1">{{ $krt->nama_kriteria }}</span>
                                        @elseif ($krt->nama_kriteria === 'Kriteria Pendidikan')
                                            <span class="badge bg-label-dark me-1">{{ $krt->nama_kriteria }}</span>
                                        @elseif ($krt->nama_kriteria === 'Kriteria Penelitian')
                                            <span class="badge bg-label-dark me-1">{{ $krt->nama_kriteria }}</span>
                                        @else
                                            <span class="badge bg-label-danger me-1">{{ $krt->nama_kriteria }}</span>
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
                                                    href="/dashboard/tampil/kriteria/{{ $kriteriaId }}/pertanyaan/{{ $krt->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                    Selengkapnya
                                                </a>
                                            </div>
                                        </div>
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
