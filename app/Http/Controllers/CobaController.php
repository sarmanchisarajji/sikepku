<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Kriteria;
use App\Models\Pertanyaan;
use App\Models\Users;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        // $data = Users::find(49);
        // $jawaban = Jawaban::find(321);

        // $pertanyaanId = $jawaban->tbl_pertanyaan_id;
        // dd(Pertanyaan::find($pertanyaanId));

        $data = Users::all();
        // foreach ($data as $item) {
        //     echo $item->nama_lengkap . ' || ' . $item->nim . ' || ' . $item->jawaban->first() . '||' . '<br>';
        // }
        foreach ($data as $item) {
            // $jawaban = $item->jawaban->first() ?? "";
            $jawaban = $item->jawaban ?? "";
            // $pertanyaanId = $jawaban ? $jawaban->tbl_pertanyaan_id : "";

            // echo '<b>NAMA :</b>' . $item->nama_lengkap . ' || ' . '<b>NIM :</b>' . $item->nim . ' || <br><b>PERTANYAAN : </b>' . $jawaban . '||' . '<br><b>JAWABAN : </b>' . '$pertanyaanId' . '<br><br>';
        }

        return view('table', [
            'data' => $data
        ]);
    }

    public function index2()
    {
        // get data kriteria
        $kriteria = Kriteria::find(11);
        $questionsId = $kriteria->pertanyaan;

        // cari id pertanyaan
        $arrQuestionId = [];
        foreach ($questionsId as $item) {
            array_push($arrQuestionId, $item->id);
        }

        // query tabel jawaban berdasarkan pertanyaan_id
        $answer = Jawaban::whereIn('tbl_pertanyaan_id', $arrQuestionId)->get();
 
        // cari id users dari tabel pertanyaan
        $arrUsersId = [];
        foreach ($answer as $item) {
            array_push($arrUsersId, $item->users_id);
        }
        // query tabel jawaban berdasarkan pertanyaan_id
        $userByAnswer = Users::find($arrUsersId[0]);
        $arrUsers = [];
        foreach ($arrQuestionId as $item) {
            array_push($arrUsers, $userByAnswer);
        }
        // dd($arrUsers);


        return view('table2', [
            'kriteria' => $kriteria,
            'question' => $kriteria->pertanyaan,
            'answer' => $answer,
            'users' => $arrUsers,
        ]);
    }
}
