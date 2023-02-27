@extends('dashboard.layouts.main')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambahkan Pertanyaan Baru</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        {{-- <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small> --}}
                    </div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label text-capitalize" for="basic-default-name"
                                    style="font-size: .9rem !important">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="basic-default-name" id="basic-default-name">
                                        <option value="1">Pengguna Lulusan</option>
                                        <option value="2">Alumni</option>
                                        <option value="2">Tenaga Kependidikan</option>
                                        <option value="2">Mahasiswa</option>
                                        <option value="2">Dosen</option>
                                        <option value="2">Mitra Pengabdian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label text-capitalize" for="basic-default-message"
                                    style="font-size: .9rem !important">Pertanyaan</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" class="form-control" placeholder="Masukan pertanyaan" rows="5"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" autofocus
                                        required></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
