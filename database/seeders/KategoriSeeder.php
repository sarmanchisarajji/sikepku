<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'id' => 1,
            'nama_kategori' => 'Pengguna Lulusan'
        ]);

        Kategori::create([
            'id' => 2,
            'nama_kategori' => 'Alumni'
        ]);

        Kategori::create([
            'id' => 3,
            'nama_kategori' => 'Tenaga Kependidikan'
        ]);

        Kategori::create([
            'id' => 4,
            'nama_kategori' => 'Mahasiswa'
        ]);

        Kategori::create([
            'id' => 5,
            'nama_kategori' => 'Dosen'
        ]);

        Kategori::create([
            'id' => 6,
            'nama_kategori' => 'Mitra'
        ]);
    }
}
