{{-- @dd($pertanyaans) --}}

@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container col-lg-11">
        <div class="container-xxl flex-grow-1 container-p-y justify-content-center">
            <div class="card">
                <h5 class="card-header text-center fs-2 fw-900 text-primary">Daftar Kategori Pertanyaan</h5>
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
                                    <td><span class="badge bg-label-warning me-1">{{ $ktg->nama_kategori }}</span></td>
                                    <td>
                                        <a href="/dashboard/tampil/kategori/{{ $ktg->id }}" class="badge bg-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <a href="#" class="badge bg-danger">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="badge bg-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- <tr>
                                <td><span class="badge bg-label-warning me-1">Mahasiswa</span></td>
                                <td>
                                    <a href="/dashboard/tampil/kategori" class="badge bg-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="badge bg-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="badge bg-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="badge bg-label-warning me-1">Mahasiswa</span></td>
                                <td>
                                    <a href="/dashboard/tampil/kategori" class="badge bg-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="badge bg-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="badge bg-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
