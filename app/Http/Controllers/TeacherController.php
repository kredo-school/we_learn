<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    // teacher register
    public function index()
    {
        return view('teacher.register');
    }

    // teacher login
    public function login()
    {
        return view('auth.teachers_login');
    }

    // teacher register
    public function register(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'password' => ['required', 'string', 'min:8'],
            'age' => ['required', 'integer', 'min:18'],
            'gender' => ['required', 'in:male,female'],
            'occupation' => ['required', 'in:doctor,engineer,teacher,student'],
            'residence' => ['required', 'string'],
            'language' => ['required', 'string'],
            'subject' => ['required', 'in:english,math,science,social studies'],
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);

        // Create new Teacher model instance with validated data
        $teacher = new Teacher($validatedData);

        // Save the Teacher model to the database
        $teacher->save();

        // Redirect to a success page
        return redirect()->route('/register/teacher');
    }

    // teacher login
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if (Auth::guard('teachers')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // Authentication passed...
            return redirect()->route('home_teacher');
        } else {
            return redirect()->back()->withErrors([
                'message' => 'Invalid credentials',
            ]);
        }
    }
}

