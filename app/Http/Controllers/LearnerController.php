<?php

namespace App\Http\Controllers;
use App\Models\Learner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LearnerController extends Controller
{
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

        $validatedData["password"] = Hash::make($validatedData["password"]);

        // Create a new user instance
        $learner = new Learner($validatedData);

        // Save the new user to the database
        $learner->save();

        // Login user
        $creds = $request->only('email','password');

        if (Auth::guard('learners')->attempt($creds))
            return redirect()->route('learner.home');
    }
    public function login(Request $request)
    {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:learners,email',
            'password'=>'required|min:8'
        ]);

        $creds = $request->only('email','password');

        if (Auth::guard('learners')->attempt($creds))
            return redirect()->route('learner.home');
        else
            return redirect()->route('learner.login')->with('fail','Incorrect credentioals');
    }
}

