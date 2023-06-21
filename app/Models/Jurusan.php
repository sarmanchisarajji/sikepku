<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'tbl_jurusan';
    protected $guarded = [''];

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(Users::class);
    }
}
