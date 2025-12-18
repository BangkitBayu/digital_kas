<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\kelas as Authenticatable;


class Kelas extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        "nama_kelas",
        "kompetensi_keahlian",
        "asal_sekolah",
        "password"
    ];

    protected $hidden = [
        "password",
        "remember_token"
    ];
}
