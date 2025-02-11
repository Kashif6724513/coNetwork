<?php

namespace App\Repository;

use App\Models\Student;
use App\Models\StudentSession;
use App\Models\StudentSession2;
use Illuminate\Support\Facades\DB;
use App\Repository\interfaces\StudentsRepositoryInterfaces;

class StudentsRepository implements StudentsRepositoryInterfaces
{
    public function all()
    {
       return StudentSession2::with('student','session')->orderBy('id','DESC')->get();
    }

    public function create()
    {
        return StudentSession::all();
    }

    public function store($request)
    {
         $student = new Student();
        if ($request->hasFile('image')) {
            $destinationPath = 'images';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
            $student->image = $imageName;
        }
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->session = $request->session;
        $student->save();
        DB::table('student_sessions2')->insert([
            'student_id' => $student->id,
            'student_sessions_id' => $request->session,
        ]);
    }

    public function find($id)
    {
        return  Student::findOrFail($id);
    }

    public function update($request, $id)
    {
        $student = Student::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($student->image && file_exists(public_path('images/' . $student->image))) {
                unlink(public_path('images/' . $student->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->session = $request->session;
        $student->save();
        DB::table('student_sessions2')
            ->where('student_id', $student->id)
            ->update(['student_sessions_id' => $request->session]);
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        if (file_exists(public_path('images/' . $student->image))) {
            unlink(public_path('images/' . $student->image));
        }
        return $student->delete();
    }
}
