<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\kelas as Authenticatable;


class Kelas extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        "kelas",
        "jurusan",
        "asal_sekolah",
        "password"
    ];

    protected $hidden = [
        "password",
        "remember_token",
        "updated_at",
        "created_at"
    ];

    public function AnggotaKelas() : HasMany {
        return $this->hasMany(Anggota_kelas::class , 'kelas_id');
    }
}
