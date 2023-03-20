<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pertanyaan;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'id' => 1,
            'nama_kategori' => 'Mahasiswa'
        ]);

        Kategori::create([
            'id' => 2,
            'nama_kategori' => 'Dosen'
        ]);

        Kategori::create([
            'id' => 3,
            'nama_kategori' => 'Alumni'
        ]);


        Pertanyaan::create([
            'id' => 1,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'tbl_kategori_id' => 1
        ]);

        Pertanyaan::create([
            'id' => 2,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'tbl_kategori_id' => 2
        ]);

        Pertanyaan::create([
            'id' => 3,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'tbl_kategori_id' => 3
        ]);

        Pertanyaan::create([
            'id' => 4,
            'pertanyaan' => 'Bagaimana menurut anda terkait pelayanan di HMTI?',
            'tbl_kategori_id' => 1
        ]);

        // Pertanyaan::factory(10)->create();
    }
}
