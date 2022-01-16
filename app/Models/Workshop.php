<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = "workshop";
    protected $primaryKey = "id_work";
    protected $fillable = [
        'nama_workshop',
        'tgl_mulai',
        'tgl_selesai'
    ];
}
