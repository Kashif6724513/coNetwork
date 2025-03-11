<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use App\Repository\interfaces\importExcelInterface;

class EmployeeImportController extends Controller
{
    protected $importExcelRepository;

    public function __construct(importExcelInterface $importExcelRepository)
    {
        $this->importExcelRepository = $importExcelRepository;
    }

    public function getEmployees()
    {
        $employees = $this->importExcelRepository->all(); 
        return EmployeeResource::collection($employees);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        $this->importExcelRepository->store($request);

        return response()->json(['message' => 'Excel file imported successfully!']);
    }
}
