<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $kriteria = [
            'Kriteria Tata Pamong',
            'Kriteria Mahasiswa',
            'Kriteria Sumber Daya Manusia',
            'Kriteria Keuangan, Sarana, dan Prasarana',
            'Kriteria Pendidikan',
            'Kriteria Penelitian',
            'Kriteria Pengabdian Kepada Masyarakat'    
        ];

        foreach ($kriteria as $item) {
            Kriteria::create([
                'nama_kriteria' => $item,
            ]);
        }
    }
}
