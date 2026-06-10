<?php

namespace App\Http\Controllers;

use App\Models\Cash_bills;
use App\Models\Cashes;
use App\Models\Students;
use Illuminate\Http\Request;

class CashBillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cash_bills = Cash_bills::with(['student', 'cashes'])->get();

        return view('cash_bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cash_bills.create', [
            'students' => Students::all(),
            'cashes' => Cashes::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists::students,id',
            'cash_id' => 'required|exists::cashes,id',
            'jumlah_tagihan' => 'required|numeric',
            'status' => 'required',
        ]);

        Cash_bills::create($validated);

        return redirect()->route('cash_bills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cash_bills $cash_bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cash_bills $cash_bills)
    {
        return view('cash_bills.edit', compact('cash_bills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cash_bills $cash_bills)
    {
        $cash_bills->update($request->all());

        return redirect()->route('cash_bills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cash_bills $cash_bills)
    {
        $cash_bills->delete();

        return redirect()->route('cash_bills.index');
    }
}
