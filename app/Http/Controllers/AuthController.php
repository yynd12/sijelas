<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            "email" => 'required',
            'password' => 'required'
        ]);
        $user = Auth::attempt($credentials);

        return redirect()->route('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function store(Request $request){
        $request->validate([
            "email" => 'required',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name
        ]);

        return redirect()->back();
    }
    
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function update(Request $request){
        $request->validate([
            "email" => 'required',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required'
        ]);

        $user = User::where('id', $request->id)->get();

        $user->update([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name
        ]);

        return redirect()->back();
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }
    
}
