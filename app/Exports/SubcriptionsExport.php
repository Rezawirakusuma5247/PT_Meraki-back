<?php

namespace App\Exports;

use App\Models\Subcription;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubcriptionsExport implements FromCollection
{
    public function collection()
    {
        return Subcription::all();
    }
}

