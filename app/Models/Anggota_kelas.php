<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggota_kelas extends Model
{
    public function Kelas() : BelongsTo {
        return $this->belongsTo(Kelas::class);
    }
}
