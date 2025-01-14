<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasis extends Model
{
    use HasFactory;
    public function pasiens()
    {
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }
}
