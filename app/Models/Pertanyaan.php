<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'tbl_pertanyaan';
    protected $guarded = [''];

    public $timestamps = false;

    // PERTANYAAN to KATEGORI => *:1
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // PERTANYAAN to KRITERIA => *:1
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    // PERTANYAAN to JAWABAN => 1:* 
    // public function jawaban()
    // {
    //     return $this->hasMany(Jawaban::class);
    // }
}
