@extends('dashboard.layouts.main')
@section('main-content')
    <style>
        .table td {
            max-width: 280px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-2 mb-2" style="font-size: 16px">
                <span class="text-muted fw-light">Tabel /</span> Daftar Pertanyaan Berdasarkan Kriteria
                <a href="/dashboard/tampil/kriteria/{{ $kategoriId }}/pertanyaan/{{ $kriteriaId }}"
                    class="float-end fs-12{{ Request::is('dashboard/tampil/kriteria/*/pertanyaan/*') ? ' text-primary' : ' text-muted' }}">Pertanyaan</a>
                <a href="/dashboard/tampil/kriteria/{{ $kategoriId }}"
                    class="float-end fs-12 text-muted fw-light">Kriteria/</a>
                <a href="/dashboard/tampil" class="float-end fs-12 text-muted fw-light">Kategori/</a>
                <a href="/dashboard" class="float-end fs-12 text-muted fw-light">Dashboard/</a>
            </h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                name="btn-tambah">
                <i class="bi bi-patch-plus"></i>
                Tambah Data
            </button>

            <div class="card">
                <div class="table-responsive text-center">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                                <th class="fw-bolder">No</th>
                                <th class="fw-bolder">Pertanyaan</th>
                                <th class="fw-bolder">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php
                                $no = 1;
                            @endphp

                            @forelse ($pertanyaans as $prty)
                                <tr>
                                    <th scope="row"> {{ $no++ }} </th>
                                    <td>
                                        {{ $prty->pertanyaan }}
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <form action="/hapus/{{ $prty->id }}" class="mx-1" method="post">
                                            <input type="hidden" value="{{ $kriteriaId }}" name="kriteriaId">
                                            <input type="hidden" value="{{ $kategoriId }}" name="kategoriId">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Hapus data?')" type="submit"
                                                class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1{{ $prty->id }}" class="btn btn-warning"
                                            name="btn-edit">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal Edit Data -->
                                <div class="text-start">
                                    <div class="modal fade" id="staticBackdrop1{{ $prty->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="/update/{{ $prty->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" value="{{ $kriteriaId }}" name="kriteriaId">
                                                <input type="hidden" value="{{ $kategoriId }}" name="kategoriId">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                            Form Pertanyaan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="pertanyaan" class="form-label text-capitalize">
                                                                    Masukan Pertanyaan
                                                                </label>
                                                                <textarea class="form-control" id="message-text" rows="5" name="pertanyaan" required>{{ $prty->pertanyaan }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-outline-info">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="3">Belum ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Modal Tambah Data -->
            <div class="mt-5">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/create" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $kriteriaId }}" name="kriteriaId">
                            <input type="hidden" value="{{ $kategoriId }}" name="kategoriId">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Pertanyaan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="pertanyaan" class="form-label text-capitalize">
                                                Masukan Pertanyaan
                                            </label>
                                            <textarea class="form-control" id="message-text" rows="3" name="pertanyaan"
                                                placeholder="Seberapa puas anda dengan pelayanan lab Unit Jaminan Mutu?" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
