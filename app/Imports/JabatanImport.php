<?php

namespace App\Imports;

use App\Models\Jabatan;
use Maatwebsite\Excel\Concerns\ToModel;

class JabatanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Jabatan([
            'id_jabatan' => $row['0'],
            'nama_jabatan' => $row['1'],
            'created_at'  => $row['2'],
            'updated_at' => $row['3'],
        ]);
    }
}
