<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $kategori = 'Alumni';
        $kriteria = 'Kriteria Tata Pamong';

        $tabelPertanyaanIds = Pertanyaan::whereHas('kategori', function ($query) use ($kategori) {
            $query->where('nama_kategori', $kategori);
        })->whereHas('kriteria', function ($query) use ($kriteria) {
            $query->where('nama_kriteria', $kriteria);
        })->pluck('id');

        $jawabanCounts = Jawaban::whereIn('tbl_pertanyaan_id', $tabelPertanyaanIds)
            ->select('jawaban', DB::raw('count(*) as total'))
            ->groupBy('jawaban')
            ->get();

        $labels = ['sangat_tidak_puas', 'tidak_puas', 'cukup_puas', 'puas', 'sangat_puas'];

        $jumlahJawaban = [];
        foreach ($labels as $label) {
            $jumlahJawaban[$label] = 0;
        }

        foreach ($jawabanCounts as $jawabanCount) {
            $jawaban = $jawabanCount->jawaban;
            $total = $jawabanCount->total;

            if (in_array($jawaban, $labels)) {
                $jumlahJawaban[$jawaban] = $total;
            }
        }
        // dd($jumlahJawaban);

        return view('dashboard.posts.chartui', compact('jumlahJawaban'));
    }
}
