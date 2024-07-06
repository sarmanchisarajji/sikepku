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
            'nim' => 'mitra12345',
            'email' => 'mitra@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Kampus UHO',
            'no_hp' => '0813233123',
            'user_type' => 'mitra',
            'password' => bcrypt('mitra12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Tenaga Pendidik',
            'nim' => 'tendik12345',
            'email' => 'tendik@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Kampus UHO',
            'no_hp' => '0813233123',
            'user_type' => 'tenaga_kependidikan',
            'password' => bcrypt('tendik12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Dosen',
            'nim' => 'dosen12345',
            'email' => 'dosen@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'dosen',
            'password' => bcrypt('dosen12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Pengguna Lulusan',
            'nim' => 'penglus12345',
            'email' => 'penggunalulusan@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'pengguna_lulusan',
            'password' => bcrypt('penglus12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Alumni',
            'nim' => 'alumni12345',
            'email' => 'alumni@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'alumni',
            'password' => bcrypt('alumni12345'),
        ]);
        Users::create([
            'nama_lengkap' => 'Sarman Chisara',
            'nim' => 'E1E120050',
            'email' => 'fauzan@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Anduhonohu',
            'no_hp' => '08154433434',
            'user_type' => 'mahasiswa',
            'password' => bcrypt('E1E120050'),
        ]);
        Users::create([
            'nama_lengkap' => 'Admin',
            'nim' => 'admin12345',
            'email' => 'admin@gmail.com',
            'tbl_jurusan_id' => 3,
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'UHO',
            'no_hp' => '08154433434',
            'user_type' => 'admin',
            'password' => bcrypt('admin12345'),
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
