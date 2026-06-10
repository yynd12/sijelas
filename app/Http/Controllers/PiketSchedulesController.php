<?php

namespace App\Http\Controllers;

use App\Models\Piket_schedules;
use App\Models\Student_class;
use Illuminate\Http\Request;

class PiketSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Piket_schedules::with('student_class')->get();

        return view('piket_schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('piket_schedules.create', [
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
            'hari' => 'required',
            'anggota_piket' => 'required',
        ]);

        Piket_schedules::create($validated);

        return redirect()->route('piket_schedules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Piket_schedules $piket_schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piket_schedules $piket_schedules)
    {
        return view('piket_schedules.edit', compact("piket_schedules"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piket_schedules $piket_schedules)
    {
        $piket_schedules->update($request->all());

        return redirect()->route('piket_schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Piket_schedules $piket_schedules)
    {
        $piket_schedules->delete();

        return redirect()->route('piket_schedules.index');
    }
}
