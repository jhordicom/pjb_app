<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id_jabatan";
    protected $paginationTheme = "bootstrap";
    protected $fillable = [
        'nama_jabatan'
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    //     public function render()
    //     {
    //         $dtjabatan = TableJabatan::orderBy('id_jabatan', 'DESC')->paginate(10);
    //         return view('Jabatan.data-jabatan', ['dtjabatan' => Sdtjabatan])
    //         ->extends('layout.app')
    //         ->section('content');
    //     }
    // 
}
