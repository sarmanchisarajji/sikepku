<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'nama_lengkap' => 'Mitra',
            'nim' => 'MITRA',
            'email' => 'mitra@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Kampus UHO',
            'no_hp' => '0813233123',
            'user_type' => 'mitra',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Tenaga Pendidik',
            'nim' => 'TENAGAPENDIDIK',
            'email' => 'tendik@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Kampus UHO',
            'no_hp' => '0813233123',
            'user_type' => 'tenaga_kependidikan',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Dosen',
            'nim' => '0011078904',
            'email' => 'dosen@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'dosen',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Lisa',
            'nim' => 'PENGGUNALULUSAN',
            'email' => 'penggunalulusan@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'pengguna_lulusan',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Dinar',
            'nim' => 'ALUMNI',
            'email' => 'alumni@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'alumni',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Fauzan',
            'nim' => 'E1E120067',
            'email' => 'fauzan@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'mahasiswa',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Admin',
            'nim' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'UHO',
            'no_hp' => '08154433434',
            'user_type' => 'admin',
            'password' => bcrypt('12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Sarman',
            'nim' => 'Sarman',
            'email' => 'sarman@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Palangga',
            'no_hp' => '08154433434',
            'user_type' => 'pengguna_lulusan',
            'password' => bcrypt('12345'),
        ]);
    }
}
