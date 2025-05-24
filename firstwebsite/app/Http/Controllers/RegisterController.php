<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Login; // Create this model for the logins table

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:logins,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Login::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}