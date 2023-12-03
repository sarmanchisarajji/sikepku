<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jurusan;
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
        $this->call([
            JurusanSeeder::class,
            UsersSeeder::class,
            KategoriSeeder::class,
            KriteriaSeeder::class,
            KategoriKriteriaSeeder::class,
            PertanyaanSeeder::class,
            // JawabanSeeder::class
        ]);
    }
}
