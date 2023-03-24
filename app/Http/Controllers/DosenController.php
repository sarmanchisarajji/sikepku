<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen()
    {
        return view('dashboard.level.index-dosen', [
            "Dosen" => Dosen::all()
        ]);
    }
}
