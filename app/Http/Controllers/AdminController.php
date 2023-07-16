<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.posts.admin', [
            'admins' => Users::with('jurusan')->where('user_type', 'admin')->get()
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nim' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'tbl_jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'user_type' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        Users::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => strtoupper($request->nim),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tbl_jurusan_id' => $request->tbl_jurusan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'user_type' => $request->user_type,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->to('/dashboard/admin');
    }

    public function upTodate(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nim' => 'required|min:3|max:255|unique:users,nim,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|min:5',
            'tbl_jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'user_type' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        $user = Users::find($id);
        $user->nama_lengkap = $request->nama_lengkap;
        $user->nim = strtoupper($request->nim);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tbl_jurusan_id = $request->tbl_jurusan_id;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->user_type = $request->user_type;
        $user->alamat = $request->alamat;
        $user->no_hp = $request->no_hp;
        $user->save();

        return redirect()->to('/dashboard/admin');
    }


    public function hapus($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect()->to('/dashboard/admin');
    }
}
