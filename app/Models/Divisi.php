<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = "Divisi";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_divisi',
        'nama_pegawai',
        'jabatan',
        'email',
        'NID',
    ];
}
