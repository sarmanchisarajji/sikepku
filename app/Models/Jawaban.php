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

    // JAWABAN to USERS => *:1
    public function users()
    {
        return $this->belongsTo(Users::class, 'users_id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'tbl_pertanyaan_id');
    }
}
