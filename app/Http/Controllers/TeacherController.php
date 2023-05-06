<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.register');
    }

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

        // Create new Teacher model instance with validated data
        $teacher = new Teacher($validatedData);

        // Save the Teacher model to the database
        $teacher->save();

        // Redirect to a success page
        return redirect()->route('/register/teacher');
    }
}

