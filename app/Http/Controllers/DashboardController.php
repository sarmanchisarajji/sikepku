<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use App\Models\Users;
use App\Models\Jawaban;
use App\Models\Kategori;
use App\Models\Kriteria;
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

        $jumlahKriteriaPenggunaLulusan = Kategori::where('nama_kategori', 'Pengguna Lulusan')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;
        // 

        $jumlahKategoriSoalAlumni = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Alumni');
        })->count();

        $jumlahKriteriaAlumni = Kategori::where('nama_kategori', 'Alumni')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;

        // 

        $jumlahKategoriSoalTendik = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Tenaga Kependidikan');
        })->count();

        $jumlahKriteriaTendik = Kategori::where('nama_kategori', 'Tenaga Kependidikan')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;

        // 

        $jumlahKategoriSoalMahasiswa = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Mahasiswa');
        })->count();

        $jumlahKriteriaMahasiswa = Kategori::where('nama_kategori', 'Mahasiswa')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;

        // 

        $jumlahKategoriSoalDosen = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Dosen');
        })->count();

        $jumlahKriteriaDosen = Kategori::where('nama_kategori', 'Dosen')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;

        // 

        $jumlahKategoriSoalMitra = Pertanyaan::whereHas('kategori', function ($query) {
            $query->where('nama_kategori', 'Mitra');
        })->count();

        $jumlahKriteriaMitra = Kategori::where('nama_kategori', 'Mitra')
            ->withCount('kriteria')
            ->first()
            ->kriteria_count;

        $jmlhResponden =  Users::where('user_type', '!=', 'admin')->count();

        $jumlahOrangMengisi = Jawaban::distinct('users_id')->count('users_id');

        return view('dashboard.index', [
            'jmlSoalPenggunaLulusan' =>  $jumlahKategoriSoalPenggunaLulusan,
            'jmlSoalAlumni' =>  $jumlahKategoriSoalAlumni,
            'jmlSoalTendik' =>  $jumlahKategoriSoalTendik,
            'jmlSoalMahasiswa' =>  $jumlahKategoriSoalMahasiswa,
            'jmlSoalDosen' =>  $jumlahKategoriSoalDosen,
            'jmlSoalMitra' =>  $jumlahKategoriSoalMitra,
            'jmlKriteriaPenggunaLulusan' => $jumlahKriteriaPenggunaLulusan,
            'jmlKriteriaAlumni' => $jumlahKriteriaAlumni,
            'jmlKriteriaTendik' => $jumlahKriteriaTendik,
            'jmlKriteriaMahasiswa' => $jumlahKriteriaMahasiswa,
            'jmlKriteriaDosen' => $jumlahKriteriaDosen,
            'jmlKriteriaMitra' => $jumlahKriteriaMitra,
            'jmlhResponden' => $jmlhResponden,
            'jumlahOrangMengisi' => $jumlahOrangMengisi,
        ]);
    }
}
