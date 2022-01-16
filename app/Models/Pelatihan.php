<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = "pelatihan";
    protected $primaryKey = "id_pelatihan";
    protected $fillable = [
        'nama_pelatihan',
        'tgl_mulai',
        'tgl_selesai'
    ];
}
