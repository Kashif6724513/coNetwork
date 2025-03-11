<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Employee([
            'id'     => $row['id'],
            'name'     => $row['name'],
            'email'    => $row['email'],
            'age'    => $row['age'],
        ]);
    }
}
