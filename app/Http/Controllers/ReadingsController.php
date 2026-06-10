<?php

namespace App\Http\Controllers;

use App\Models\Readings;
use App\Models\Students;
use Illuminate\Http\Request;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readings = Readings::with('student')->get();

        return view('readings.index', compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readings.create', [
            'students' => Students::all()
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

        Readings::create($validated);

        return redirect()->route('readings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Readings $readings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Readings $readings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Readings $readings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Readings $readings)
    {
        $readings->delete();

        return redirect()->route('readings.index');
    }
}
