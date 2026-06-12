<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Student;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification ::with('student')->get();

        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notifications.create', [
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
            'isi_notif' => 'required',
            'jenis' => 'required',
        ]);

        Notification ::create($validated);

        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification  $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification  $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification  $notifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notifications)
    {
        $notifications->delete();

        return redirect()->route('notifications.index');
    }
}
