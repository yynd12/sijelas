<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = StudentClass::all();

        return view('student_classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student_classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kelas' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        StudentClass::create($validated);

        return redirect()->route('student_classes.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentClass $student_class)
    {
        return view('student_classes.edit', compact('student_class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentClass $student_class)
    {
        $student_class->update($request->validate([
            'nama_kelas' => 'required',
            'tahun_ajaran' => 'required',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentClass $student_class)
    {
        $student_class->delete();

        return redirect()->route('student_classes.index');
    }
}
