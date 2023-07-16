{{-- {{ $users }} --}}

@extends('dashboard.layouts.main')
@section('main-content')
    <!-- Basic Bootstrap Table -->
    <div class="">
        <div class="container-xxl container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="font-size: 16px">
                <span class="text-muted fw-light">Tabel /</span> Daftar Data User
                <a href="/dashboard/user"
                    class="float-end{{ Request::is('dashboard/user') ? ' text-primary' : ' text-muted' }}">Data User</a>
                <a href="/dashboard" class="float-end text-muted fw-light">Dashboard/</a>
            </h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                name="btn-tambah">
                <i class="bi bi-patch-plus"></i>
                Tambah User
            </button>

            <div class="card" style="font-size: 12px">
                <div class="table-responsive text-nowrap text-center">
                    <table class="table table-hover">
                        <thead class="table" style="font-size: 12px">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>NIM/NIDN</th>
                                <th>Tipe User</th>
                                {{-- <th>Jenis Kelamin</th> --}}
                                <th>Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>
                                        {{ $user->nim }}
                                    </td>
                                    <td>
                                        @if ($user->user_type === 'pengguna_lulusan')
                                            <span class="badge bg-label-info me-1">{{ $user->user_type }}</span>
                                        @elseif ($user->user_type === 'alumni')
                                            <span class="badge bg-label-success me-1">{{ $user->user_type }}</span>
                                        @elseif ($user->user_type === 'tenaga_kependidikan')
                                            <span class="badge bg-label-primary me-1">{{ $user->user_type }}</span>
                                        @elseif ($user->user_type === 'mahasiswa')
                                            <span class="badge bg-label-warning me-1">{{ $user->user_type }}</span>
                                        @elseif ($user->user_type === 'dosen')
                                            <span class="badge bg-label-light me-1">{{ $user->user_type }}</span>
                                        @elseif ($user->user_type === 'mitra')
                                            <span class="badge bg-label-danger me-1">{{ $user->user_type }}</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        {{ $user->jenis_kelamin }}
                                    </td> --}}
                                    <td>
                                        {{ $user->jurusan->nama_prodi }}
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <form action="/delete/{{ $user->id }}" class="mx-1" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Hapus data?')" type="submit"
                                                class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1{{ $user->id }}"
                                            class="btn btn-warning btn-edit" name="btn-edit">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Belum ada data user.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @foreach ($users as $user)
                    <!-- Modal Edit Data-->
                    <div class="modal fade" id="staticBackdrop1{{ $user->id }}" data-bs-backdrop="static"
                        tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="/edit/{{ $user->id }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-2 mb-1">
                                            <div class="col mb-0">
                                                <label for="nama_lengkap" class="form-label">
                                                    Nama Lengkap
                                                </label>
                                                <input type="text" id="nama_lengkap" name="nama_lengkap"
                                                    class="form-control" value="{{ $user->nama_lengkap }}"
                                                    placeholder="Masukan nama lengkap" autofocus required />
                                            </div>
                                            <div class="col mb-0">
                                                <label for="nim" class="form-label">
                                                    NIM/NIDN
                                                </label>
                                                <input type="text" id="nim" name="nim" class="form-control"
                                                    value="{{ $user->nim }}" placeholder="Masukan NIM/NIDN" autofocus
                                                    required />
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-1">
                                            <div class="col mb-0">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" id="password" name="password" class="form-control"
                                                    value="{{ $user->password }}" placeholder="Masukan password" autofocus
                                                    required />
                                            </div>
                                            <div class="col mb-0">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="Masukan email" value="{{ $user->email }}" autofocus
                                                    required />
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-1">
                                            <div class="col mb-0">
                                                <label for="tbl_jurusan_id" class="form-label">Program Studi</label>
                                                <select class="form-select form-control bg-light " id="tbl_jurusan_id"
                                                    name="tbl_jurusan_id" required autofocus>
                                                    <option selected>~ Pilih Program Studi ~</option>
                                                    <option value="1"
                                                        {{ $user->tbl_jurusan_id == 1 ? 'selected' : '' }}>Teknik
                                                        Arsitektur</option>
                                                    <option value="2"
                                                        {{ $user->tbl_jurusan_id == 2 ? 'selected' : '' }}>Teknik Elektro
                                                    </option>
                                                    <option value="3"
                                                        {{ $user->tbl_jurusan_id == 3 ? 'selected' : '' }}>Teknik
                                                        Informatika</option>
                                                    <option value="4"
                                                        {{ $user->tbl_jurusan_id == 4 ? 'selected' : '' }}>Teknik Mesin
                                                    </option>
                                                    <option value="5"
                                                        {{ $user->tbl_jurusan_id == 5 ? 'selected' : '' }}>Teknik Sipil
                                                    </option>
                                                    <option value="6"
                                                        {{ $user->tbl_jurusan_id == 6 ? 'selected' : '' }}>Rekayasa
                                                        Infrastruktur & Lingkungan
                                                    </option>
                                                    <option value="7"
                                                        {{ $user->tbl_jurusan_id == 7 ? 'selected' : '' }}>Teknik Kelautan
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <label for="user_type" class="form-label">Kategori
                                                    Pengguna</label>
                                                <select class="form-select form-control bg-light" id="user_type"
                                                    name="user_type" autofocus required>
                                                    <option selected>~ Pilih Kategori Pengguna ~</option>
                                                    <option value="pengguna_lulusan"
                                                        {{ $user->user_type == 'pengguna_lulusan' ? 'selected' : '' }}>
                                                        Pengguna Lulusan</option>
                                                    <option value="alumni"
                                                        {{ $user->user_type == 'alumni' ? 'selected' : '' }}>
                                                        Alumni</option>
                                                    <option value="tenaga_kependidikan"
                                                        {{ $user->user_type == 'tenaga_kependidikan' ? 'selected' : '' }}>
                                                        Tenaga Kependidikan
                                                    </option>
                                                    <option value="mahasiswa"
                                                        {{ $user->user_type == 'mahasiswa' ? 'selected' : '' }}>
                                                        Mahasiswa</option>
                                                    <option value="dosen"
                                                        {{ $user->user_type == 'dosen' ? 'selected' : '' }}>
                                                        Dosen</option>
                                                    <option value="mitra"
                                                        {{ $user->user_type == 'mitra' ? 'selected' : '' }}>
                                                        Mitra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-1">
                                            <div class="col mb-0">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select form-control bg-light" id="jenis_kelamin"
                                                    name="jenis_kelamin" required autofocus>
                                                    <option selected>~ Pilih Jenis Kelamin ~</option>
                                                    <option value="Laki - Laki"
                                                        {{ $user->jenis_kelamin == 'Laki - Laki' ? 'selected' : '' }}>
                                                        Laki - Laki
                                                    </option>
                                                    <option value="2"
                                                        {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                                        Perempuan
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <label for="no_hp" class="form-label">Nomor Telepon</label>
                                                <input type="text" id="no_hp" name="no_hp" class="form-control"
                                                    placeholder="Masukan nomor telepon" value="{{ $user->no_hp }}"
                                                    autofocus required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-0">
                                                <label for="jenis_kelamin" class="form-label">Alamat</label>
                                                <textarea name="alamat" id="alamat" rows="2" autofocus required class="form-control form-control"
                                                    placeholder="Masukan alamat">{{ $user->alamat }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                            Batal
                                        </button>
                                        <button type="submit" class="btn btn-outline-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modal Tambah Data-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="/create" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Data User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-2 mb-1">
                                    <div class="col mb-0">
                                        <label for="nama_lengkap" class="form-label">
                                            Nama Lengkap
                                        </label>
                                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control"
                                            value="{{ old('nama_lengkap') }}" placeholder="Masukan nama lengkap"
                                            autofocus required />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="nim" class="form-label">
                                            NIM/NIDN
                                        </label>
                                        <input type="text" id="nim" name="nim" class="form-control"
                                            value="{{ old('nim') }}" placeholder="Masukan NIM/NIDN" autofocus
                                            required />
                                    </div>
                                </div>
                                <div class="row g-2 mb-1">
                                    <div class="col mb-0">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Masukan password" autofocus required />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Masukan email" value="{{ old('email') }}" autofocus required />
                                    </div>
                                </div>
                                <div class="row g-2 mb-1">
                                    <div class="col mb-0">
                                        <label for="tbl_jurusan_id" class="form-label">Program Studi</label>
                                        <select class="form-select form-control bg-light " id="tbl_jurusan_id"
                                            name="tbl_jurusan_id" required autofocus {{ old('tbl_jurusan_id') }}>
                                            <option selected>~ Pilih Program Studi ~</option>
                                            <option value="1">Teknik Arsitektur</option>
                                            <option value="2">Teknik Elektro</option>
                                            <option value="3">Teknik Informatika</option>
                                            <option value="4">Teknik Mesin</option>
                                            <option value="5">Teknik Sipil</option>
                                            <option value="6">Rekayasa Infrastruktur & Lingkungan</option>
                                            <option value="7">Teknik Kelautan</option>
                                        </select>
                                    </div>
                                    <div class="col mb-0">
                                        <label for="user_type" class="form-label">Kategori Pengguna</label>
                                        <select class="form-select form-control bg-light" id="user_type" name="user_type"
                                            autofocus required value="{{ old('user_type') }}">
                                            <option selected>~ Pilih Kategori Pengguna ~</option>
                                            <option value="pengguna_lulusan">Pengguna Lulusan</option>
                                            <option value="alumni">Alumni</option>
                                            <option value="tenaga_kependidikan">Tenaga Kependidikan</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                            <option value="dosen">Dosen</option>
                                            <option value="mitra">Mitra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2 mb-1">
                                    <div class="col mb-0">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select form-control" id="jenis_kelamin" name="jenis_kelamin"
                                            required autofocus value="{{ old('jenis_kelamin') }}">
                                            <option selected>~ Pilih Jenis Kelamin ~</option>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col mb-0">
                                        <label for="no_hp" class="form-label">Nomor Telepon</label>
                                        <input type="text" id="no_hp" name="no_hp" class="form-control"
                                            placeholder="Masukan nomor telepon" value="{{ old('no_hp') }}" autofocus
                                            required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <label for="jenis_kelamin" class="form-label">Alamat</label>
                                        <textarea name="alamat" id="alamat" rows="2" autofocus required class="form-control form-control"
                                            placeholder="Masukan alamat" value="{{ old('alamat') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    {{-- <script>
        $(document).ready(function() {
            $('.btn-edit').on('click', function() {
                var id = $(this).data('id');
                var modal = $('#staticBackdrop1' + id);

                // Ambil data dari server menggunakan AJAX
                $.ajax({
                    url: '/get-user/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Tampilkan data pada modal
                        modal.find('#nama_lengkap').val(response.nama_lengkap);
                        modal.find('#nim').val(response.nim);
                        modal.find('#password').val(response.password);
                        modal.find('#email').val(response.email);
                        modal.find('#tbl_jurusan_id').val(response.tbl_jurusan_id);
                        modal.find('#user_type').val(response.user_type);
                        modal.find('#jenis_kelamin').val(response.jenis_kelamin);
                        modal.find('#no_hp').val(response.no_hp);
                        modal.find('#alamat').val(response.alamat);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script> --}}
@endsection
