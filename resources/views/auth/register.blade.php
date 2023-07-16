@extends('auth.layouts.main')
@section('main-content')
    <!-------------------- ------ Right Box ---------------------------->
    <div class="col-md-6 right-box">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('question/assets/img/brand/logo-brand2.svg') }}" alt="brand">
            <img src="{{ asset('question/assets/img/brand/logo-uho.svg') }}" alt="brand">
        </a>
        <div class="row align-items-center mt-4">
            <div class="header-text mb-4">
                <h2>Yuk Jadi Responden SikapKu</h2>
                <p class="mt-3">Daftarkan dirimu sekarang dan berikan pandanganmu mengenai pelayanan yang
                    diberikan oleh Jurusan Teknik Informatika Fakultas Teknik UHO melalui pengisian survei ini!
                </p>
            </div>
            <form action="/register" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" id="nama_lengkap"
                        name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap" autofocus required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" id="nim" name="nim"
                        value="{{ old('nim') }}" placeholder="NIM/NIDN" autofocus required>
                </div>
                <div class="input-group mb-3">
                    <input type="email"
                        class="form-control @error('email') is-invalid @enderror form-control-lg bg-light fs-6"
                        id="email" name="email" value="{{ old('email') }}" placeholder="Alamat Email" autofocus
                        required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror form-control-lg bg-light fs-6"
                        id="password" name="password" placeholder="Password" autofocus required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <select class="form-select form-control-lg bg-light fs-6" id="tbl_jurusan_id" name="tbl_jurusan_id"
                        placeholder="Jurusan" required autofocus value="{{ old('tbl_jurusan_id') }}">
                        <option selected>~ Pilih Program Studi ~</option>
                        <option value="1" {{ old('tbl_jurusan_id') == 1 ? 'selected' : '' }}>Teknik Arsitektur</option>
                        <option value="2" {{ old('tbl_jurusan_id') == 2 ? 'selected' : '' }}>Teknik Elektro</option>
                        <option value="3" {{ old('tbl_jurusan_id') == 3 ? 'selected' : '' }}>
                            Teknik Informatika
                        </option>
                        <option value="4" {{ old('tbl_jurusan_id') == 4 ? 'selected' : '' }}>Teknik Mesin</option>
                        <option value="5" {{ old('tbl_jurusan_id') == 5 ? 'selected' : '' }}>Teknik Sipil</option>
                        <option value="6" {{ old('tbl_jurusan_id') == 6 ? 'selected' : '' }}>
                            Rekayasa Infrastruktur & Lingkungan
                        </option>
                        <option value="7" {{ old('tbl_jurusan_id') == 7 ? 'selected' : '' }}>Teknik Kelautan</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select form-control-lg bg-light fs-6" id="jenis_kelamin" name="jenis_kelamin"
                        placeholder="Jenis Kelamin" required autofocus value="{{ old('jenis_kelamin') }}">
                        <option selected>~ Pilih Jenis Kelamin ~</option>
                        <option value="Laki - Laki" {{ old('jenis_kelamin') == 'Laki - Laki' ? 'selected' : '' }}>
                            Laki - Laki
                        </option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select form-control-lg bg-light fs-6" id="user_type" name="user_type"
                        placeholder="Kategori Pengguna" autofocus required value="{{ old('user_type') }}">
                        <option selected>~ Pilih Kategori Pengguna ~</option>
                        <option value="pengguna_lulusan" {{ old('user_type') == 'pengguna_lulusan' ? 'selected' : '' }}>
                            Pengguna Lulusan
                        </option>
                        <option value="alumni" {{ old('user_type') == 'alumni' ? 'selected' : '' }}>Alumni</option>
                        <option value="tenaga_kependidikan"
                            {{ old('user_type') == 'tenaga_kependidikan' ? 'selected' : '' }}>
                            Tenaga Kependidikan
                        </option>
                        <option value="mahasiswa" {{ old('user_type') == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa
                        </option>
                        <option value="dosen" {{ old('user_type') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                        <option value="mitra" {{ old('user_type') == 'mitra' ? 'selected' : '' }}>Mitra</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <textarea name="alamat" id="alamat" rows="3" autofocus required
                        class="form-control form-control-lg bg-light fs-6" placeholder="Alamat" value="{{ old('alamat') }}">{{ old('alamat') }}</textarea>
                    {{-- <input type="textarea" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat"> --}}
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Telepon"
                        id="no_hp" name="no_hp" value="{{ old('no_hp') }}" autofocus required>
                </div>
                {{-- <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary">
                            <small>Remember Me</small>
                        </label>
                    </div>
                    <div class="forgot">
                        <small><a href="#" style="text-decoration: none">Forgot Password?</a></small>
                    </div>
                </div> --}}
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit"
                        style="background-color: #2E44D0;">Daftar</button>
                </div>
            </form>
            <div class="row">
                <small class="d-flex justify-content-center mb-5">Already have an account?
                    <a href="/login" style="text-decoration: none">SignIn</a>
                </small>
            </div>
        </div>
    </div>
    <!--------------------------- Left Box ----------------------------->
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
        style="background: #2E44D0;">
        <div class="featured-image mb-3">
            <img src="{{ asset('question/assets/svg/signin.svg') }}" class="img-fluid" style="width: 250px;">
        </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
            Gabung Sekarang</p>
        <small class="text-white text-wrap text-center"
            style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Bergabunglah dengan komunitas
            survei akademik kami dan berikan kontribusi penting dalam meningkatkan pengalaman akademik untuk
            dirimu dan rekan-rekanmu!</small>
    </div>
@endsection
