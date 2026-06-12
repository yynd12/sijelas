<?php

namespace App\Http\Controllers;

use App\Models\ClassTeacher;
use App\Models\StudentClass;
use App\Models\User;
use Illuminate\Http\Request;

class ClassTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = ClassTeacher::with(['user', 'studentClass'])->get();

        return view('class_teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class_teachers.create', [
            'users' => User::all(),
            'classes' => StudentClass::all(),
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

        ClassTeacher::create($validated);

        return redirect()->route('class_teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassTeacher $class_teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassTeacher $class_teacher)
    {
        return view('class_teachers.edit', compact('classTeacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,ClassTeacher $class_teacher)
    {
        $class_teacher->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassTeacher $class_teacher)
    {
        $class_teacher->delete();

        return redirect()->route('class_teacher.index');
    }
}
