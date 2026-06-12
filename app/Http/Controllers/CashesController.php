<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class CashesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cashes = Cash::with('Student_class')->get();

        return view('cashes.index', compact('cashes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cashes.create', [
            'classes' => StudentClass::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_class_id' => 'required|exists::student_class,id'
        ]);

        Cash::create($validated);

        return redirect()->route('cashes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cash $cashes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cash $cashes)
    {
        return view('cashes.edit', compact('cash'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cash $cashes)
    {
        $cashes->update($request->all());

        return redirect()->route('cashes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cash $cashes)
    {
        $cashes->delete();

        return redirect()->route('cashes.index');
    }
}
