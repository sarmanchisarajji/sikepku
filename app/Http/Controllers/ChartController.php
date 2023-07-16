<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function index()
    {
        // $result = DB::select(DB::raw("select count(*) as total, city from students group by city"))
        return view('dashboard.posts.chart');
    }
}
