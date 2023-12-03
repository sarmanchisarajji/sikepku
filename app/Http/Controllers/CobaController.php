<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use App\Models\Jawaban;
use App\Models\Kriteria;
use App\Models\Users;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CobaController extends Controller
{
    public function index($kriteriaId)
    {
        return view('table', [
            'kriteriaId' => $kriteriaId,
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

    public function export($kriteriaId)
    {
        $namaFile = Kriteria::find($kriteriaId)->nama_kriteria;

        return Excel::download(new DataExport($kriteriaId), str()->slug($namaFile) . '.xlsx');
    }
}
