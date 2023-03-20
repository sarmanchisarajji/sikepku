@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container col-lg-12">
        <div class="container mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                name="btn-tambah">Tambah Data
            </button>
        </div>
        <div class="container-xxl flex-grow-1 mt-3">
            <div class="card">
                <h5 class="card-header bg-primary text-white">Daftar Pertanyaan Berdasarkan Kategori</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap text-center text-dark">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($pertanyaans as $prty)
                                    <tr>
                                        <th scope="row"> {{ $no++ }} </th>
                                        <td>
                                            {{ $prty->pertanyaan }}
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <form action="/hapus/{{ $prty->id }}" class="mx-1" method="GET">
                                                <input type="hidden" value="{{ $id }}" name="Id">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
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
                                    <div class="mt-5 text-start">
                                        <div class="modal fade" id="staticBackdrop1{{ $prty->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="/update/{{ $prty->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" value="{{ $id }}" name="id">
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
                                                                    <label for="pertanyaan"
                                                                        class="form-label text-capitalize">
                                                                        Masukan Pertanyaan
                                                                    </label>
                                                                    <textarea class="form-control" id="message-text" rows="5" name="pertanyaan" required>
                                                                        {{ $prty->pertanyaan }}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-outline-info">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <tr>
                                    <th scope="row"> 2 </th>
                                    <td>
                                        Seberapa puas anda terhadap pelayanan jurusan ?
                                    </td>
                                    <td>
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

            <!-- Modal Tambah Data -->
            <div class="mt-5">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/create" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $id }}" name="id">
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
                                                placeholder="Seberapa puas anda dengan pelayanan lab Unit Jaminan Mutu?" required>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-info">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
