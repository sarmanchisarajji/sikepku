<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
        // $dosen = Users::with('jurusan')->where('user_type', 'dosen')->get();
        // $mahasiswa = Users::with('jurusan')->where('user_type', 'mahasiswa')->get();
        // $alumni = Users::with('jurusan')->where('user_type', 'alumni')->get();
        // $tenaga_kependidikan = Users::with('jurusan')->where('user_type', 'tenaga_kependidikan')->get();
        // $mitra = Users::with('jurusan')->where('user_type', 'mitra')->get();
        // $pengguna_lulusan = Users::with('jurusan')->where('user_type', 'pengguna_lulusan')->get();
        return view('dashboard.posts.user', [
            "users" => Users::with('jurusan')->get()
            // "dosens" => $dosen,
            // "mahaiswas" => $mahasiswa,
            // "alumnis" => $alumni,
            // "tendiks" => $tenaga_kependidikan,
            // "mitras" => $mitra,
            // "penglus" => $pengguna_lulusan
        ]);
    }

    public function destroy($id)
    {
        $user = Users::find($id);


        $user->delete();
        return redirect()->to('/dashboard/user');
    }
}
