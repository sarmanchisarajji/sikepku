<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{

    public function index(Kategori $kategori)
    {
        return view('dashboard.posts.pertanyaan', [
            'pertanyaans' => $kategori->pertanyaan,
            'id' => $kategori->id
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'id' => 'required',
        ]);

        Pertanyaan::create([
            'pertanyaan' => ucfirst($request->pertanyaan),
            'kategori_id' => $request->id
        ]);

        $id = $request->id;
        return redirect()->to('/dashboard/tampil/kategori/' . $id);
    }

    public function update(Request $request, $id)
    {
        $data = Pertanyaan::find($id);
        $data->update([
            'pertanyaan' => ucfirst($request->pertanyaan)
        ]);

        $id = $request->id;
        return redirect()->to('/dashboard/tampil/kategori/' . $id);
    }


    public function destroy($id, Request $request)
    {
        $Id = $request->Id;

        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();

        return redirect()->to('/dashboard/tampil/kategori/' . $Id);
    }
}
