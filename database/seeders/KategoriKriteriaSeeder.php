<?php

namespace Database\Seeders;

use App\Models\KategoriKriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriKriteria::create([
            'tbl_kategori_id' => 1,
            'tbl_kriteria_id' => 1,
        ]);

        KategoriKriteria::create([
            'tbl_kategori_id' => 2,
            'tbl_kriteria_id' => 1,
        ]);

        KategoriKriteria::create([
            'tbl_kategori_id' => 3,
            'tbl_kriteria_id' => 1,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 3,
            'tbl_kriteria_id' => 3,
        ]);

        KategoriKriteria::create([
            'tbl_kategori_id' => 4,
            'tbl_kriteria_id' => 1,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 4,
            'tbl_kriteria_id' => 2,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 4,
            'tbl_kriteria_id' => 4,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 4,
            'tbl_kriteria_id' => 5,
        ]);

        KategoriKriteria::create([
            'tbl_kategori_id' => 5,
            'tbl_kriteria_id' => 1,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 5,
            'tbl_kriteria_id' => 3,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 5,
            'tbl_kriteria_id' => 4,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 5,
            'tbl_kriteria_id' => 6,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 5,
            'tbl_kriteria_id' => 7,
        ]);

        KategoriKriteria::create([
            'tbl_kategori_id' => 6,
            'tbl_kriteria_id' => 1,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 6,
            'tbl_kriteria_id' => 6,
        ]);
        KategoriKriteria::create([
            'tbl_kategori_id' => 6,
            'tbl_kriteria_id' => 7,
        ]);

    }
}
