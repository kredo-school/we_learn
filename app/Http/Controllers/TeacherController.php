<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    private $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
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
        {
            $teacher = Teacher::find(Auth::guard('teachers')->id());
            return view('home.home_teacher', ['teacher' => $teacher]);
        }
        else
            return redirect()->route('teacher.login')->with('fail','Incorrect credentioals');
    }

    public function showProfile($id)
    {
        $teacher = Teacher::find($id);
        return view('profile.teachers', ['teacher' => $teacher]);
    }

    public function editProfile($id)
    {
        $teacher = Teacher::find($id);
        return view('edit_profile.teachers', ['teacher' => $teacher]);
    }

    public function editProfileSubmit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        if ($request->hasFile('profile_img'))
        {
            $path = $request->file('profile_img')->getRealPath();
            $img = file_get_contents($path);
            $base64 = base64_encode($img);
            $image = 'data:' . $request->file('profile_img')->getMimeType() . ';base64,' . $base64;
            $teacher->profile_img = $image;
        }

        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->age = $request->input('age');
        $teacher->gender = $request->input('gender');
        $teacher->occupation = $request->input('occupation');
        $teacher->residence = $request->input('residence');
        $teacher->language = $request->input('language');
        $teacher->subject = $request->input('subject');
        $teacher->learning_mode = $request->input('learning_mode');
        $teacher->about = $request->input('about');

        $teacher->update();

        return redirect()->route('teacher.show.profile', ['id' => $teacher->id]);
    }

    public function home()
    {
        $teacher = Teacher::find(Auth::guard('teachers')->id());
        return view('home.home_teacher', ['teacher' => $teacher]);
    }

}

