<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use App\Models\Student_class;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = tasks::all();
        
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create', [
            'classes' => Student_class::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_class_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required|date',
        ]);

        tasks::create($validated);

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tasks $tasks)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tasks $tasks)
    {
        $tasks->update($request->all());

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tasks $tasks)
    {
        $tasks->delete();

        return redirect()->route('tasks.index');
    }
}
