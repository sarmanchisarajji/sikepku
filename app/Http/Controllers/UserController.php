<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Menghapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);
        // $dosen = Users::with('jurusan')->where('user_type', 'dosen')->get();
        // $mahasiswa = Users::with('jurusan')->where('user_type', 'mahasiswa')->get();
        // $alumni = Users::with('jurusan')->where('user_type', 'alumni')->get();
        // $tenaga_kependidikan = Users::with('jurusan')->where('user_type', 'tenaga_kependidikan')->get();
        // $mitra = Users::with('jurusan')->where('user_type', 'mitra')->get();
        // $pengguna_lulusan = Users::with('jurusan')->where('user_type', 'pengguna_lulusan')->get();
        return view('dashboard.posts.user', [
            "users" => Users::with('jurusan')
                ->whereNotIn('user_type', ['admin'])
                ->get()
            // "dosens" => $dosen,
            // "mahaiswas" => $mahasiswa,
            // "alumnis" => $alumni,
            // "tendiks" => $tenaga_kependidikan,
            // "mitras" => $mitra,
            // "penglus" => $pengguna_lulusan
        ]);
    }

    public function create(Request $request)
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

        Alert::success('Berhasil tambah data', session('success'));
        return redirect()->to('/dashboard/user');
    }

    public function importCSV(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('csv_file');
        $fileContent = file_get_contents($file);
        $rows = explode("\n", trim($fileContent));

        // Skip header (baris pertama) dengan menggunakan array_shift
        $header = array_shift($rows);

        foreach ($rows as $row) {
            $data = str_getcsv($row);

            if (count($data) == 9) {
                Users::create([
                    'nama_lengkap' => $data[0],
                    'nim' => strtoupper($data[1]),
                    'email' => $data[2],
                    'password' => Hash::make($data[3]),
                    'tbl_jurusan_id' => $data[4],
                    'jenis_kelamin' => $data[5],
                    'user_type' => $data[6],
                    'alamat' => $data[7],
                    'no_hp' => $data[8],
                ]);
            }
        }

        Alert::success('Berhasil tambah data', session('success'));
        // return redirect()->back()->with('success', 'Data berhasil diimpor.');
        return redirect()->to('/dashboard/user');
    }

    public function update(Request $request, $id)
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

        Alert::success('Berhasil update data', session('success'));
        return redirect()->to('/dashboard/user');
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();

        Alert::success('Berhasil', session('success'));
        return redirect()->to('/dashboard/user');
    }
}
