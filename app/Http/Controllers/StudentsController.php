<?php

namespace App\Http\Controllers;

use App\Models\Students;
use app\Models\User;
use app\Models\Student_class;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   
    public function index()
    {
        $students = Students::with(['user','studentClass'])->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create',['users' => user::all(),
         'classes' => student_class::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:students',
            'nama' => 'required',
            'jabatan' => 'required',
            'student_class_id' => 'required|exists:student_classes_id',
            'user_id' => 'required|exists:users_id',
        ]);

        Students::create($validated);

        return redirect()->route('students.index')
              ->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        return view('students.edit', [
            'student'=>$students,
            'users'=> User::all(),
            'classes'=> Student_class::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id,' . $students->id,
            'nama' => 'required',
            'jabatan' => 'required',
            'student_class_id' => 'required',
            'user_id' => 'required',
        ]);

        $students->update($validated);

        return redirect()->route('students.index')->with('succes', 'Data siswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        $students->delete();

        return redirect()->route('students.index')->with('succes', 'Data berhasil dihapus');
    }
}
