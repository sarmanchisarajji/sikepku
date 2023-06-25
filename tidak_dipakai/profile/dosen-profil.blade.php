@extends('level.layouts.index')
@section('main-content')
    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-4">
                <h3 class="card-header text-center fw-bold mb-3 text-primary mb-3">Detail Profil</h3>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('') }}img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                            width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload Foto Baru</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            {{-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button> --}}
                            <p class="text-muted mb-0">JPG atau PNG. Maksimal 2 MB</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap"
                                    value="John" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nip" class="form-label">NIP</label>
                                <input class="form-control" type="text" id="nip" name="nip" value="John"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="status_dosen">Status Dosen</label>
                                <select id="status_dosen" name="status_dosen" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Non PNS">Non PNS</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input class="form-control" type="text" id="jabatan" name="jabatan"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tugas_tambahan" class="form-label">Tugas Tambahan</label>
                                <input class="form-control" type="text" id="tugas_tambahan" name="tugas_tambahan"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lama_kerja" class="form-label">Lama Kerja</label>
                                <input class="form-control" type="text" id="lama_kerja" name="lama_kerja"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tingkat_pendidikan" class="form-label">Tingkat Pendidikan</label>
                                <input class="form-control" type="text" id="tingkat_pendidikan" name="tingkat_pendidikan"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    placeholder="Address" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                    placeholder="Address" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Address" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="no_hp">Nomor Telepon</label>
                                <div class="input-group input-group-merge">
                                    {{-- <span class="input-group-text">US (+1)</span> --}}
                                    <input type="text" id="no_hp" name="no_hp" class="form-control"
                                        placeholder="202 555 0111" />
                                </div>
                            </div>
                            {{-- <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state"
                                    placeholder="California" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="zipCode" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zipCode" name="zipCode"
                                    placeholder="231465" maxlength="6" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Language</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">Select Language</option>
                                    <option value="en">English</option>
                                    <option value="fr">French</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="timeZones" class="form-label">Timezone</label>
                                <select id="timeZones" class="select2 form-select">
                                    <option value="">Select Timezone</option>
                                    <option value="-12">(GMT-12:00) International Date Line West</option>
                                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                    <option value="-10">(GMT-10:00) Hawaii</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency" class="form-label">Currency</label>
                                <select id="currency" class="select2 form-select">
                                    <option value="">Select Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="euro">Euro</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-info me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
@endsection
