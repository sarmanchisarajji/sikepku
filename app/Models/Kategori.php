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

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }

    public function kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }
}
