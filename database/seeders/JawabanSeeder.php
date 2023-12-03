<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jawaban::create([
            'jawaban' => 'sangat_puas',
            'tbl_pertanyaan_id' => 1,
            'users_id' => 8
        ]);
        Jawaban::create([
            'jawaban' => 'puas',
            'tbl_pertanyaan_id' => 2,
            'users_id' => 8
        ]);
        Jawaban::create([
            'jawaban' => 'cukup_puas',
            'tbl_pertanyaan_id' => 3,
            'users_id' => 8
        ]);
    }
}
