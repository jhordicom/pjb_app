<?php

namespace App\Exports;

use App\Models\Sertifikasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class SertifikatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sertifikasi::all();
    }
}
