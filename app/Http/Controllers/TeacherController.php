<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        // $teachers = DB::table('teachers')
        // ->join('departments', 'teachers.department_id', '=', 'departments.id')
        // ->select('teachers.id', 'teachers.name', 'departments.department_name')
        // ->get();
        // $teachers = DB::table('teachers')
        //     ->leftJoin('departments', 'teachers.department_id', '=', 'departments.id')
        //     ->select('teachers.id', 'teachers.name', 'departments.department_name')
        //     ->get();

        $teachers = DB::table('teachers')
            ->rightJoin('departments', 'teachers.department_id', '=', 'departments.id')
            ->select('teachers.id', 'teachers.name', 'departments.department_name')
            ->get();

        return response()->json($teachers);
    }
    public function store()
    {
        DB::table('teachers')->insert([
            'name' => 'Ali',
            'department_id' => '1',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Asif',
            'department_id' => '2',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Awais',
            'department_id' => '4',
        ]);
    }
}
