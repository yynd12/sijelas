<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use App\Models\Students;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = notifications::with('student')->get();

        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notifications.create', [
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
            'isi_notif' => 'required',
            'jenis' => 'required',
        ]);

        notifications::create($validated);

        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notifications $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notifications $notifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notifications $notifications)
    {
        $notifications->delete();

        return redirect()->route('notifications.index');
    }
}
