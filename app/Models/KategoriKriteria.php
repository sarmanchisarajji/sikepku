<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKriteria extends Model
{
    use HasFactory;
    protected $table = 'tbl_kategori_kriteria';
    protected $guarded = [''];

    public $timestamps = false;
}
