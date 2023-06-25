<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // public function index()
    // {
    //     return view('auth.login', [
    //         "title" => 'Login'
    //     ]);
    // }

    public function index()
    {
        return view('auth.login-ui', [
            "title" => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
            // 'password' => 'required|max:5'
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            if (auth()->user()->user_type == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif (auth()->user()->user_type === 'mahasiswa') {
                return redirect()->intended('/mahasiswa');
            } elseif (auth()->user()->user_type === 'dosen') {
                return redirect()->intended('/dosen');
            } elseif (auth()->user()->user_type === 'pengguna_lulusan') {
                return redirect()->intended('/pengguna-lulusan');
            } elseif (auth()->user()->user_type === 'tenaga_kependidikan') {
                return redirect()->intended('/tendik');
            } elseif (auth()->user()->user_type === 'alumni') {
                return redirect()->intended('/alumni');
            } elseif (auth()->user()->user_type === 'mitra') {
                return redirect()->intended('/mitra');
            } else {
                return redirect()->intended('/login');
            }
        }

        return back()->with('loginError', 'Email atau Password Salah!')->onlyInput('email');

        // return back()->withErrors([
        //     'email' => 'Perhatikan! Email yang dimasukan salah.',
        //     'password' => 'Password Salah'
        // ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
