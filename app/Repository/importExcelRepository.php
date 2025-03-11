<?php

namespace App\Repository;

use App\Imports\EmployeeImport;
use App\Models\Employee;
use App\Repository\interfaces\importExcelInterface;
use Maatwebsite\Excel\Facades\Excel;

class importExcelRepository implements importExcelInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new Employee();
    }

    public function all()
    {
       return $this->model::all();
    }

    public function store($request)
    {
        Excel::import(new EmployeeImport, $request->file('file'));
        
    }
}
