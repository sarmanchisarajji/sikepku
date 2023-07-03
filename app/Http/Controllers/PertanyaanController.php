<?php

namespace App\Http\Controllers;

// use App\Models\Kategori;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\Kriteria;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{

    public function index($kategori, Kriteria $kriteria)
    {
        return view('dashboard.posts.pertanyaan', [
            'pertanyaans' => $kriteria->pertanyaan,
            'kriteriaId' => $kriteria->id,
            'kategoriId' => $kategori,
        ]);
    }


    public function create(Request $request)
    {

        $request->validate([
            'pertanyaan' => 'required',
            'kriteriaId' => 'required',
            'kategoriId' => 'required',
        ]);

        Pertanyaan::create([
            'pertanyaan' => ucfirst($request->pertanyaan),
            'kategori_id' => $request->kategoriId,
            'kriteria_id' => $request->kriteriaId,
        ]);

        return redirect()->to("/dashboard/tampil/kriteria/$request->kategoriId/pertanyaan/$request->kriteriaId");
    }

    public function update(Pertanyaan $pertanyaan, Request $request)
    {
        $pertanyaan->update([
            'pertanyaan' => ucfirst($request->pertanyaan)
        ]);
        return redirect()->to("/dashboard/tampil/kriteria/$request->kategoriId/pertanyaan/$request->kriteriaId");
    }


    public function destroy(Pertanyaan $pertanyaan, Request $request)
    {
        $pertanyaan->delete();
        return redirect()->to("/dashboard/tampil/kriteria/$request->kategoriId/pertanyaan/$request->kriteriaId");
    }


    public function dosen()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        // dd($pertanyaan);
        return view('level.halamanpertanyaan', compact('pertanyaan'));
    }

    public function penggunalulusan()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        // dd($pertanyaan);
        return view('level.halamanpertanyaan', compact('pertanyaan'));
    }

    public function alumni()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        // dd($pertanyaan);
        return view('level.index', compact('pertanyaan'));
    }

    public function tenegakependidikan()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        return view('level.index', compact('pertanyaan'));
    }


    public function mahasiswa()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        return view('level.halamanpertanyaan', compact('pertanyaan'));
    }



    public function mitra()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        // dd($userType);

        $usertype = str_replace('_', ' ', $userType);
        // dd($usertype);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        // dd($kategori);

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        return view('level.index', compact('pertanyaan'));
    }
}
