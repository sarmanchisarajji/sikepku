<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'id' => 1,
            'nama_prodi' => 'Teknik Arsitektur'
        ]);

        Jurusan::create([
            'id' => 2,
            'nama_prodi' => 'Teknik Elektro'
        ]);

        Jurusan::create([
            'id' => 3,
            'nama_prodi' => 'Teknik Informatika'
        ]);

        Jurusan::create([
            'id' => 4,
            'nama_prodi' => 'Teknik Mesin'
        ]);

        Jurusan::create([
            'id' => 5,
            'nama_prodi' => 'Teknik Sipil'
        ]);

        Jurusan::create([
            'id' => 6,
            'nama_prodi' => 'Rekayasa Infrastruktur & Lingkungan'
        ]);

        Jurusan::create([
            'id' => 7,
            'nama_prodi' => 'Teknik Kelautan'
        ]);
    }
}
