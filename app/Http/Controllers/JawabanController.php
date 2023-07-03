<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JawabanController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'jawaban.*' => 'required', // Memastikan semua jawaban terisi
            'saran' => 'required' // Memastikan saran terisi
        ]);

        $jawaban = $request->input('jawaban'); // Nilai jawaban dari form
        $saran = $request->input('saran'); // Nilai saran dari form


        foreach ($jawaban as $pertanyaanId => $nilai) {
            $data = [
                'jawaban' => $nilai,
                'tbl_pertanyaan_id' => $pertanyaanId,
                'users_id' => auth()->user()->id // Ambil ID user yang sedang terautentikasi
            ];

            // Simpan data ke dalam tabel
            Jawaban::create($data);
        }

        // Simpan saran ke dalam tabel
        Saran::create([
            'saran' => $saran,
            'users_id' => auth()->user()->id // Ambil ID user yang sedang terautentikasi
        ]);
        return view('level.thanks')->with('success', 'Data berhasil disimpan');
        // return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
