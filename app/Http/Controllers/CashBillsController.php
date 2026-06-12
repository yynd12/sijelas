<?php

namespace App\Http\Controllers;

use App\Models\CashBill;
use App\Models\Cash;
use App\Models\Student;
use Illuminate\Http\Request;

class CashBillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cash_bills = CashBill::with(['student', 'cashes'])->get();

        return view('cash_bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cash_bills.create', [
            'students' => Student::all(),
            'cashes' => Cash::all(),
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

        CashBill::create($validated);

        return redirect()->route('cash_bills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CashBill $cash_bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CashBill $cash_bills)
    {
        return view('cash_bills.edit', compact('cash_bills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CashBill $cash_bills)
    {
        $cash_bills->update($request->all());

        return redirect()->route('cash_bills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CashBill $cash_bills)
    {
        $cash_bills->delete();

        return redirect()->route('cash_bills.index');
    }
}
