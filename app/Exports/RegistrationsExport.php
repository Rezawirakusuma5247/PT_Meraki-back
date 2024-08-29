<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrationsExport implements FromCollection
{
    protected $pelatihanId;

    public function __construct($pelatihanId)
    {
        $this->pelatihanId = $pelatihanId;
    }

    public function collection()
    {
        // Filter registrations by pelatihan_id
        return Registration::where('pelatihan_id', $this->pelatihanId)->get();
    }
}

