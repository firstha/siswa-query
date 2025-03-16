<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
