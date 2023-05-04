<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;

class LearnerController extends Controller
{
    public function index()
    {
        return view('learner.register');
    }
    public function register(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'age' => 'required|integer',
        'residense' => 'required|string|max:255',
        'gender' => 'required|in:male,female',
    ]);

    // Create a new user instance
    $learner = new Learner($validatedData);

    // Save the new user to the database
    $learner->save();

    // Redirect the user to the login page or wherever you want to redirect them after registration
    return redirect()->route('/register/learner');

    }
}
