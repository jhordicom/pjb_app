<?php

namespace App\Imports;

use App\Models\Pelatihan;
use Maatwebsite\Excel\Concerns\ToModel;

class PelatihanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pelatihan([
            'id_pelatihan' => $row['0'],
            'nama_pelatihan' => $row['1'],
            'tgl_mulai' => $row['2'],
            'tgl_selesai' => $row['3'],
            'created_at' => $row['4'],
            'updated_at' => $row['5'],
        ]);
    }
}
