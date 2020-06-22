<?php

namespace App\Imports;

use App\User;
use App\Intern;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Intern([
            'name' => $row['full_name'],
            'email' => $row['email'],
            'slack_username' => $row['username'],
            'points' => $row['total_points']
        ]);
    }
}
