<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasipegawai extends Model
{
    protected $table = "sertifikasi";
    protected $primaryKey = "sertifikasipegawai_id";
    protected $fillable = [
        'NID', 255,
        'sertifikasi_id',
        'pelatihan_id',
        'work_id',
    ];
}
