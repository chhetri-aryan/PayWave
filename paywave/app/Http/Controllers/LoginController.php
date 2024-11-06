<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $storedUsername = 'admin';
        $storedPasswordHash = Hash::make('admin'); 

        if ($request->username === $storedUsername && Hash::check($request->password, $storedPasswordHash)) {
            session(['is_admin' => true]); 
            return redirect()->route('dashboard')->with('status', 'Logged in successfully!');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function logout(Request $request) {
    $request->session()->forget('is_admin');  
    $request->session()->invalidate();  
    $request->session()->regenerateToken();

    return redirect()->route('login')->with('status', 'Logged out successfully!');
    }

}
