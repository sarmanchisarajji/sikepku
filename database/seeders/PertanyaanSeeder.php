<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertanyaan::create([
            'id' => 1,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 1,
            'kriteria_id' => 12
        ]);

        Pertanyaan::create([
            'id' => 2,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 2,
            'kriteria_id' => 11
        ]);

        Pertanyaan::create([
            'id' => 3,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 3,
            'kriteria_id' => 16
        ]);

        Pertanyaan::create([
            'id' => 4,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 3,
            'kriteria_id' => 10
        ]);

        Pertanyaan::create([
            'id' => 5,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 4,
            'kriteria_id' => 19
        ]);

        Pertanyaan::create([
            'id' => 6,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 4,
            'kriteria_id' => 17
        ]);

        Pertanyaan::create([
            'id' => 7,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 5,
            'kriteria_id' => 15
        ]);

        Pertanyaan::create([
            'id' => 8,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'kategori_id' => 5,
            'kriteria_id' => 18
        ]);
    }
}
