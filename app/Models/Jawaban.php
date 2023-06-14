<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = 'tbl_jawaban_user';
    protected $guarded = [''];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'tbl_pertanyaan_id');
    }
}
