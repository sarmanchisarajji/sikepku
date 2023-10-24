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
        $kriteria = [
            'Kriteria Tata Pamong', 'Kriteria Mahasiswa', 'Kriteria Sumber Daya Manusia',
            'Kriteria Keuangan, Sarana, dan Prasarana', 'Kriteria Pendidikan', 'Kriteria Penelitian', 'Kriteria Pengabdian Kepada Masyarakat'
        ];

        $data = [];

        foreach ($kriteria as $krt) {
            $tabelPertanyaanIds = Pertanyaan::whereHas('kriteria', function ($query) use ($krt) {
                $query->where('nama_kriteria', $krt);
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

            $data[$krt] = $jumlahJawaban;
        }

        // dd($data);
        return view('dashboard.posts.chartui', compact('data'));
    }
}
