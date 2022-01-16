<?php

namespace App\Imports;

use App\Models\Sertifikasi;
use Maatwebsite\Excel\Concerns\ToModel;


class Sertifikatimport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sertifikasi([
            'id' => $row['0'],
            'nama' => $row['1'],
            'tglberlaku' => $row['2'],
            'masa_berlaku' => $row['3'],
            'created_at' => $row['4'],
            'updated_at' => $row['5'],

        ]);
    }
}
