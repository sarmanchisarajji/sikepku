<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;


// class Users extends Model
// {
//     protected $table = 'users';
//     protected $guarded = [''];

//     public $timestamps = false;

//     use HasFactory;

//     public function user()
//     {
//         return $this->belongsTo(Jurusan::class);
//     }
// }

// <?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // Untuk login
    protected $guarded = [''];

    // RELASI USERS KE JURUSAN => 1:1
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'tbl_jurusan_id');
    }

    // USERS to JAWABAN => 1:*
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    // public function pertanyaan()
    // {
    //     return $this->hasMany(Pertanyaan::class);
    // }

    public function saran()
    {
        return $this->hasOne(Saran::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
