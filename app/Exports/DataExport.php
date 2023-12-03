<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataExport implements FromView
{
    protected $kriteriaId;

    public function __construct($kriteriaId)
    {
        $this->kriteriaId = $kriteriaId;
    }

    public function view(): View
    {
        return view('table', [
            'kriteriaId' => $this->kriteriaId,
        ]);
    }
}
