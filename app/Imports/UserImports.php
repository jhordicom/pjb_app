<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UserImports implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'id' => $row['0'],
            'name' => $row['1'],
            'lokasi' => $row['2'],
            'pendidikan' => $row['3'],
            'level' => $row['4'],
            'email' => $row['5'],
            'NID' => $row['6'],
            'id_jabatan' => $row['7'],
            'tgl_lahir' => $row['8'],
            'id_bidang' => $row['9'],
            'tgl_bekerja' => $row['10'],
            'alamat' => $row['11'],
            'tempat_lahir' => $row['12'],
            'jenis_kelamin' => $row['13'],
            'agama' => $row['14'],
            'password' => hash::make($row['15']),
            'created_at' => $row['16'],
            'updated_at' => $row['17'],
        ]);
    }
}
