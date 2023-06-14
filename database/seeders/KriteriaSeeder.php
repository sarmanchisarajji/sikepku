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
        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '4'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '5'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '3'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '2'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '1'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Tata Pamong',
            'kategori_id' => '6'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Mahasiswa',
            'kategori_id' => '4'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Sumber Daya Manusia',
            'kategori_id' => '5'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Sumber Daya Manusia',
            'kategori_id' => '3'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Keuangan',
            'kategori_id' => '4'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Keuangan',
            'kategori_id' => '5'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Pendidikan',
            'kategori_id' => '4'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Penelitian',
            'kategori_id' => '5'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Penelitian',
            'kategori_id' => '6'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Pengabdian Kepada Masyarakat',
            'kategori_id' => '5'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Kriteria Pengabdian Kepada Masyarakat',
            'kategori_id' => '6'
        ]);
    }
}
