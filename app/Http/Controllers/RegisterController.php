<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            "title" => "Daftar"
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nim' => 'required|min:3|max:255|unique:users',
            'email' => ['required', 'email', 'unique:users', 'ends_with:@gmail.com'],
            'password' => 'required|min:5',
            'tbl_jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'user_type' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        // dd($request);

        Users::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => strtoupper($request->nim),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tbl_jurusan_id' => $request->tbl_jurusan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'user_type' => $request->user_type,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/login')->with('success', 'Berhasil Daftar, Silahkan Login!');
    }
}
