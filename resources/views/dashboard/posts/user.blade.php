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
            <div class="card" style="font-size: 12px">
                <div class="table-responsive text-nowrap text-center">
                    <table class="table table-hover table-dark">
                        <thead class="table" style="font-size: 12px">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
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
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary me-1">{{ $user->user_type }}</span>
                                    </td>
                                    {{-- <td>
                                        {{ $user->jenis_kelamin }}
                                    </td> --}}
                                    <td>
                                        {{ $user->jurusan->nama_prodi }}
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <form action="/delete/{{ $user->id }}" class="mx-1" method="post">
                                            {{-- <input type="hidden" value="" name="kriteriaId">
                                            <input type="hidden" value="" name="kategoriId"> --}}
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Hapus data?')" type="submit"
                                                class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Belum ada data user.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
