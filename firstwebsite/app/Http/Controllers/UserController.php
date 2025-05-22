<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Assuming you have a UserModel for the students table

class UserController extends Controller
{
    public function view_student()
    {
        // Fetch all users from the database
        $students = UserModel::all();

        // Return the view with the users data
        return view('pages.view_student', compact('students'));
    }
    public function registerAjax(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'birthdate' => 'nullable|date',
        ]);

        // Create a new user
        $user = UserModel::create($validatedData);

        // Return a success response
        return response()->json(['message' => 'User registered successfully!', 'user' => $user], 201);
    }
}
