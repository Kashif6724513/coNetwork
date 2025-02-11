<?php

namespace App\Http\Controllers;

use App\Models\StudentSession;
use App\Repository\interfaces\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentSessionController extends Controller
{
    protected $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $sessions = $this->studentRepository->all();
        return view('session.index',compact('sessions'));
    }

    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        
        $session = $request->validate([
            'session' => 'required',
        ]);
        $this->studentRepository->store($request);
        return redirect()->route('studentSession.index');
    }

    public function edit($id)
    {
        $session = $this->studentRepository->find($id);
        return view('session.edit',compact('session'));
    }

    public function update(Request $request,$id)
    {
        $this->studentRepository->update($request,$id);
        return redirect()->route('studentSession.index');
    }

    public function delete($id)
    {
        $this->studentRepository->delete($id);
        return redirect()->route('studentSession.index');
    }
}
