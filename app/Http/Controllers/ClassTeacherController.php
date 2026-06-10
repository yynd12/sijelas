<?php

namespace App\Http\Controllers;

use App\Models\Class_teacher;
use App\Models\Student_class;
use App\Models\User;
use Illuminate\Http\Request;

class ClassTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Class_teacher::with(['user', 'studentClass'])->get();

        return view('class_teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class_teachers.create', [
            'users' => User::all(),
            'classes' => Student_class::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => 'required|unique:class_teacher',
            'nama' => 'required',
            'student_class_id' => 'required',
            'user_id' => 'required',
        ]);

        Class_teacher::create($validated);

        return redirect()->route('class_teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Class_teacher $class_teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Class_teacher $class_teacher)
    {
        return view('class_teachers.edit', compact('classTeacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Class_teacher $class_teacher)
    {
        $class_teacher->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Class_teacher $class_teacher)
    {
        $class_teacher->delete();

        return redirect()->route('class_teacher.index');
    }
}
