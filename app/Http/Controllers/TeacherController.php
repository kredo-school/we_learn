<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class TeacherController extends Controller
{
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

        $validatedData["password"] = Hash::make($validatedData['password']);

        $teacher = new Teacher($validatedData);

        $teacher->save();

        $creds = $request->only('email','password');

        if (Auth::guard('teachers')->attempt($creds))
            return redirect()->route('teacher.home');

    }

    public function login(Request $request)
    {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:teachers,email',
            'password'=>'required|min:8'
        ]);

        $creds = $request->only('email','password');

        if (Auth::guard('teachers')->attempt($creds))
            return redirect()->route('teacher.home');
        else
            return redirect()->route('teacher.login')->with('fail','Incorrect credentioals');
    }
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.show', ['teacher' => $teacher]);
    }
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.show', ['teacher' => $teacher]);
    }
}

