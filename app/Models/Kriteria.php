<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'tbl_kriteria';
    protected $guarded = [''];

    public $timestamps = false;


     // KRITERIA to PERTANYAAN => 1:*
    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }

    // MANYTOMOANY KRITERIA to KATEGORI => *:*
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'tbl_kategori_kriteria', 'tbl_kriteria_id', 'tbl_kategori_id');
    }
}
