<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    // untuk mengetahui jumlah soal dari tiap kategori yang ada
    public function jumlah()
    {
        $jumlahKategoriSoalPenggunaLulusan = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Pengguna Lulusan');
        })->count();

        $jumlahKategoriSoalAlumni = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Alumni');
        })->count();

        $jumlahKategoriSoalTendik = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Tenaga Kependidikan');
        })->count();

        $jumlahKategoriSoalMahasiswa = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Mahasiswa');
        })->count();

        $jumlahKategoriSoalDosen = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Dosen');
        })->count();

        $jumlahKategoriSoalMitra = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Mitra');
        })->count();

        return view('dashboard.index', [
            'jmlSoalPenggunaLulusan' =>  $jumlahKategoriSoalPenggunaLulusan,
            'jmlSoalAlumni' =>  $jumlahKategoriSoalAlumni,
            'jmlSoalTendik' =>  $jumlahKategoriSoalTendik,
            'jmlSoalMahasiswa' =>  $jumlahKategoriSoalMahasiswa,
            'jmlSoalDosen' =>  $jumlahKategoriSoalDosen,
            'jmlSoalMitra' =>  $jumlahKategoriSoalMitra,
        ]);
    }
}
