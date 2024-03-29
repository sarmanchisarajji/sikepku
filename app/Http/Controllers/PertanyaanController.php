<?php

namespace App\Http\Controllers;

// use App\Models\Kategori;
use App\Models\Jawaban;
use App\Models\Kategori;
use App\Models\Kriteria;
use App\Models\Pertanyaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PertanyaanController extends Controller
{

    public function index($kategori, Kriteria $kriteria)
    {
        $title = 'Menghapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        $pertanyaans = Pertanyaan::where('kategori_id', $kategori)->where('kriteria_id', $kriteria->id)->get();

        return view('dashboard.posts.pertanyaan', [
            // 'pertanyaans' => Kategori::find($kategori)->pertanyaan,
            'pertanyaans' => $pertanyaans,
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
        Alert::success('Berhasil tambah data', session('success'));
        return redirect()->to("/dashboard/tampil/kriteria/$request->kategoriId/pertanyaan/$request->kriteriaId");
    }

    public function update(Pertanyaan $pertanyaan, Request $request)
    {
        $pertanyaan->update([
            'pertanyaan' => ucfirst($request->pertanyaan)
        ]);
        Alert::success('Berhasil update data', session('success'));
        return redirect()->to("/dashboard/tampil/kriteria/$request->kategoriId/pertanyaan/$request->kriteriaId");
    }


    public function destroy(Pertanyaan $pertanyaan, $kriteria, $kategori, Request $request)
    {

        $pertanyaan->delete();

        Alert::success('Berhasil', session('success'));
        return redirect()->to("/dashboard/tampil/kriteria/$kategori/pertanyaan/$kriteria");
    }


    public function dosen()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        $usertype = str_replace('_', ' ', $userType);
        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }

    public function penggunalulusan()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)

        $usertype = str_replace('_', ' ', $userType);

        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }

    public function alumni()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        $usertype = str_replace('_', ' ', $userType);
        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }

    public function tenagakependidikan()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        $usertype = str_replace('_', ' ', $userType);
        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }


    public function mahasiswa()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        $usertype = str_replace('_', ' ', $userType);
        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();
        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }

    public function mitra()
    {
        $userType = Auth::user()->user_type; // Mendapatkan tipe pengguna saat ini (misalnya, mahasiswa)
        $usertype = str_replace('_', ' ', $userType);
        $kategori = Kategori::where('nama_kategori', Str::lower($usertype))->first();

        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();

        $userId = auth()->user()->id;
        $isiJawaban =  Jawaban::where('users_id', $userId)->count();

        if ($isiJawaban > 0) {
            return view('level.thanks', compact('pertanyaan'));
        } else {
            return view('level.halamanpertanyaan', compact('pertanyaan'));
        }
    }
}
