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
        $kategori = [
            'Pengguna Lulusan',
            'Alumni',
            'Tenaga Kependidikan',
            'Mahasiswa',
            'Dosen',
            'Mitra'
        ];

        foreach ($kategori as $item) {
            Kategori::create([
                'nama_kategori' => $item,
            ]);
        }
    }
}
