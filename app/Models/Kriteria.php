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

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
