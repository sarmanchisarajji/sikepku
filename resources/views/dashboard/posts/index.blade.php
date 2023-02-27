@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header text-center fs-2">Daftar Pertanyaan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Pertanyaan</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr class="table-success">
                            <td>
                                <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                            </td>
                            <td><span class="badge bg-label-warning me-1">Mahasiswa</span></td>
                            <td>
                                <a href="#" class="badge bg-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="badge bg-info">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
