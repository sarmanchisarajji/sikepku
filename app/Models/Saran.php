<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $table = 'tbl_saran';
    protected $guarded = [''];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
