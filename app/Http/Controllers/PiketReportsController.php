<?php

namespace App\Http\Controllers;

use App\Models\PiketReport;
use App\Models\Student;
use Illuminate\Http\Request;

class PiketReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = PiketReport::with('student')->get();

        return view('piket_report.imdex', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('piket_reports.create', [
            'students' => Student::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated([
            'student_id' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        PiketReport::create($validated);

        return redirect()->route('piket_reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PiketReport $piket_reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PiketReport $piket_reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PiketReport $piket_reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PiketReport $piket_reports)
    {
        $piket_reports->delete();

        return redirect()->route('piket_report.index');
    }
}
