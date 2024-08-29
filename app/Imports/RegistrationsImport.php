<?php

namespace App\Imports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\ToModel;

class RegistrationsImport implements ToModel
{
    public function model(array $row)
    {
        return new Registration([
            'pelatihan_id' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'number' => $row[3],
            'social_media' => $row[4],
            'role' => $row[5],
        ]);
    }
}
