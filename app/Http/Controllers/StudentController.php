<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\interfaces\StudentsRepositoryInterfaces;

class StudentController extends Controller
{

    protected $studentsRepository;
    public function __construct(StudentsRepositoryInterfaces $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }
    public function index()
    {
        $students = $this->studentsRepository->all();
        // dd($students);
        return view('student.index', compact('students'));
    }

    public function create()
    {
        $studentSession = $this->studentsRepository->create();
        return view('student.create', compact('studentSession'));
    }

    public function store(Request $request)
    {
        $student = $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'image' => 'required'
        ]);
       $this->studentsRepository->store($request);
        return redirect()->route('student.index')->with('success', 'Student added successfully');
    }

    public function edit($id)
    {
        $student = $this->studentsRepository->find($id);
        $studentSession = $this->studentsRepository->create();
        return view('student.edit', compact('student', 'studentSession'));
    }

    public function update(Request $request, $id)
    {
        $this->studentsRepository->update($request,$id);
        return redirect()->route('student.index')->with('success', 'Student edited successfully');
    }

    public function delete($id)
    {
        $this->studentsRepository->delete($id);
        return redirect()->route('student.index')->with('success', 'Student deleted successfully');
    }

}
