<?php

namespace App\Models;

use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori';
    protected $guarded = [''];

    public $timestamps = false;


    // KATEGORI to PERTANYAAN => 1:*
    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }


     // MANY TO MANY KATEGORI to KRITERIA => *:*
    public function kriteria()
    {
        return $this->belongsToMany(Kriteria::class, 'tbl_kategori_kriteria', 'tbl_kategori_id', 'tbl_kriteria_id');
    }
}
