<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('management-pengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'teacher_id' => 'required',
            'kelas' => 'required',
        ]);

        User::create([
            'nama' => $request->nama,
            'teacher_id' => $request->teacher_id,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('users.index')->with('succes', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrfail($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrfail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'kelas' => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('users.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')
                         ->with('success', 'Data berhasil dihapus');
    
    }
}
