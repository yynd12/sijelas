<?php

namespace App\Http\Controllers;

use App\Models\PiketCchedule;
use App\Models\PiketSchedule;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class PiketSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = PiketSchedule::with('student_class')->get();

        return view('piket_schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('piket_schedules.create', [
            'classes' => StudentClass::all()
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

        PiketSchedule::create($validated);

        return redirect()->route('piket_schedules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PiketSchedule $piket_schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PiketSchedule $piket_schedules)
    {
        return view('piket_schedules.edit', compact("piket_schedules"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PiketSchedule $piket_schedules)
    {
        $piket_schedules->update($request->all());

        return redirect()->route('piket_schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PiketSchedule $piket_schedules)
    {
        $piket_schedules->delete();

        return redirect()->route('piket_schedules.index');
    }
}
