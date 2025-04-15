<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        return response()->json(Department::all());
    }

    public function store()
    {
        DB::table('departments')->insert([
            'department_name' => 'Math',
        ]);
        DB::table('departments')->insert([
            'department_name' => 'English',
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Urdu',
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Bio',
        ]);
    }
}
