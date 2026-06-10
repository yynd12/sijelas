<?php

namespace App\Http\Controllers;

use App\Models\announcements;
use App\Models\Class_teacher;
use App\Models\Student_class;
use App\Models\User;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = announcements::all();

        return view('announcements.index', compact('annocuncements'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $teachers = Class_teacher::all();

       return view('announcements.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'class_teacher_id' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        announcements::create($validated);

        return redirect()->route('announcements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(announcements $announcements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(announcements $announcements)
    {
        return view('announcements.edit', compact('announcements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, announcements $announcements)
    {
        $announcements->update($request->all());

        return redirect()->route('announcements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announcements $announcements)
    {
        $announcements->delete();

        return redirect()->route('announcements.index');
    }
}
