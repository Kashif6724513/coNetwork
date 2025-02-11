<?php

namespace App\Repository;

use App\Models\StudentSession;
use App\Repository\interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function all()
    {
       return StudentSession::orderBy('id','DESC')->get();
    }

    public function store($request)
    {
        return StudentSession::create([
            'session' => $request->session,
            'is_active' => $request->is_active
            
        ]);
    }
    kjfkjdk
    public function find($id)
    {
        return StudentSession::findOrFail($id);
    }

    public function update($request, $id)
    {
        $session = StudentSession::findOrFail($id);
        $session->update([
            'session' => $request->session,
            'is_active' => $request->is_active
        ]);
    }

    public function delete($id)
    {
        $session = StudentSession::findOrFail($id);
        return $session->delete();
    }
}
