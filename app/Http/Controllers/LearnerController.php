<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;
use Illuminate\Support\Facades\Auth;

class LearnerController extends Controller
{
    public function index()
    {
        return view('auth.learners_register');
    }

    public function login()
    {
        return view('auth.learners_login');
    }
    public function register(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:learners',
            'password' => 'required|string|min:8',
            'age' => 'required|integer',
            'residence' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);

        // Create a new user instance
        $learner = new Learner($validatedData);



        // Save the new user to the database
        $learner->save();

        // Redirect the user to the login page or wherever you want to redirect them after registration
        return redirect()->route('learner.register');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:learners',
            'password' => 'required|string|min:8',
        ]);
        if (Auth::guard('learners')->attempt(['email' => $request->email, 'password' => $request->password]))

        {
            // Authentication passed...
            return redirect()->route('home_learner');
        } else {
            return redirect()->back()->withErrors([
                'message' => 'Invalid credentials',
            ]);
        }
    }
}
