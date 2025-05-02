<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'major' => 'required',
            'entry_year' => 'required',
            'class' => 'required',
        ]);

        Student::create([
            'nim' => $request->nim,
            'name' => $request->name,
            'major' => $request->major,
            'entry_year' => $request->entry_year,
            'class' => $request->class,
        ]);

        return redirect()->route('student.index');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('student.edit', compact('id', 'student'));
    }

    public function update(Request $request, $id) {
        $request->validate([
           'nim' => 'required',
            'name' => 'required',
            'major' => 'required',
            'entry_year' => 'required',
            'class' => 'required',
        ]);

        $student = Student::find($id);

        $student->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'major' => $request->major,
            'entry_year' => $request->entry_year,
            'class' => $request->class,
        ]);

        return redirect()->route('student.index');
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
