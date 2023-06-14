<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index($id)
    {
        // echo "$id";

        return view('dashboard.posts.kriteria', [
            "kriterias" => Kriteria::where('kategori_id', $id)->get(),
            'kriteriaId' => $id,
            // "kriterias" => Kriteria::all()
        ]);
    }
}
