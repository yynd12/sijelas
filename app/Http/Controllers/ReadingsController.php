<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use App\Models\Student;
use Illuminate\Http\Request;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readings = Reading::with('student')->get();

        return view('readings.index', compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readings.create', [
            'students' => Student::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'bacaan_terakhir' => 'required',
        ]);

        Reading::create($validated);

        return redirect()->route('readings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reading $readings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reading $readings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reading $readings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reading $readings)
    {
        $readings->delete();

        return redirect()->route('readings.index');
    }
}
