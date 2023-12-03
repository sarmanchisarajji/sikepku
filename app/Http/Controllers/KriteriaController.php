<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index($id)
    {
        // dd(Kriteria::find($id)->kategori);

        return view('dashboard.posts.kriteria', [
            // "kriterias" => Kriteria::where('kategori_id', $id)->get(),
            "kriterias" => Kategori::find($id)->kriteria,
            'kriteriaId' => $id,
            // "kriterias" => Kriteria::all()
        ]);
    }
}
