<?php

namespace App\Imports;

use App\Models\Subcription;
use Maatwebsite\Excel\Concerns\ToModel;

class SubcriptionsImport implements ToModel
{
    public function model(array $row)
    {
        return new Subcription([
            'email' => $row[0],
            // Map other fields if necessary
        ]);
    }
}

