<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login-ui', [
            "title" => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt(['nim' => $credentials['nim'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            if (auth()->user()->user_type === 'admin') {
                return redirect()->intended('/dashboard');
            } elseif (auth()->user()->user_type === 'mahasiswa') {
                return redirect()->intended('/mahasiswa');
            } elseif (auth()->user()->user_type === 'dosen') {
                return redirect()->intended('/dosen');
            } elseif (auth()->user()->user_type === 'pengguna_lulusan') {
                return redirect()->intended('/pengguna-lulusan');
            } elseif (auth()->user()->user_type === 'tenaga_kependidikan') {
                return redirect()->intended('/tenaga-kependidikan');
            } elseif (auth()->user()->user_type === 'alumni') {
                return redirect()->intended('/alumni');
            } elseif (auth()->user()->user_type === 'mitra') {
                return redirect()->intended('/mitra');
            } else {
                return redirect()->intended('/login');
            }
        }

        // dd($credentials['nim']);

        return back()->with('loginError', 'NIM/NIDN atau Password Salah!')->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
