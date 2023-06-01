<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Reservation;



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

        $creds = $request->only('email', 'password');

        if (Auth::guard('teachers')->attempt($creds))
            return redirect()->route('teacher.home');
    }

    public function login(Request $request)
    {
        //validate inputs
        $request->validate([
            'email' => 'required|email|exists:teachers,email',
            'password' => 'required|min:8'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('teachers')->attempt($creds)) {
            $teacher = Teacher::find(Auth::guard('teachers')->id());
            $reservations = Reservation::all();
            return view('home.home_teacher', ['teacher' => $teacher,'reservations'=>$reservations]);
        } else
            return redirect()->route('teacher.login')->with('fail', 'Incorrect credentioals');
    }

    public function showProfile(Teacher $teacher)
    {
        return view('profile.teachers', ['teacher' => $teacher]);
    }

    public function editProfile(Teacher $teacher)
    {
        return view('edit_profile.teachers', ['teacher' => $teacher]);
    }

    public function editProfileSubmit(Request $request, Teacher $teacher)
    {
        if ($request->hasFile('profile_img')) {
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

        return redirect()->route('teacher.show.profile', ['teacher' => $teacher->id]);
    }

    public function home()
    {
        $teacher = Teacher::find(Auth::guard('teachers')->id());
        $reservations = Reservation::all();
        return view('home.home_teacher', ['teacher' => $teacher, 'reservations' => $reservations]);
    }

    public function schedule(Request $request)
    {
        $reservationDateTime = $request->input('datetime');

        // Convert the input string to a Carbon instance
        $carbonDateTime = Carbon::createFromFormat('M j, Y h:i A', $reservationDateTime);

        // Separate the date and time
        $date = $carbonDateTime->format('Y-m-d');
        $time = $carbonDateTime->format('h:i A');

        // Use $date and $time as needed
        // ...
        // M: Represents the abbreviated month name (e.g., Jan, Feb, Mar).
        // j: Represents the day of the month without leading zeros (e.g., 1, 2, 3).
        // Y: Represents the year with 4 digits (e.g., 2023).
        // h: Represents the hour in 12-hour format with leading zeros (e.g., 01, 02, 03).
        // i: Represents the minutes with leading zeros (e.g., 00, 01, 02).
        // A: Represents the uppercase AM or PM.

        // Get the teacher
        $teacherId = $request->input('teacher_id');
        $teacher = Teacher::find($teacherId);

        // Create a new Reservation instance
        $reservation = new Reservation();
        $reservation->date = $date;
        $reservation->time = $time;
        // Retrieve the authenticated teacher
        $teacher = Auth::guard('teachers')->user();

        if ($teacher) {
            // Set the teacher_id
            $reservation->teacher_id = $teacher->id;

            // Set other properties if needed

            // Save the Reservation model to the database
            $reservation->save();

            // Other logic
        }
        // Optionally, you can redirect the user or perform any other actions
        return redirect()->back();
    }

    public function editSchedule(Teacher $teacher, Reservation $reservation)
    {
        return view('home.edit_available_for_teacher', ['teacher' => $teacher, 'reservation' => $reservation]);
    }

    public function updateSchedle(Request $request, Teacher $teacher, Reservation $reservation)
    {
        $reservationDateTime = $request->input('datetime');

        // Convert the input string to a Carbon instance
        $carbonDateTime = Carbon::createFromFormat('M j, Y h:i A', $reservationDateTime);

        // Separate the date and time
        $date = $carbonDateTime->format('Y-m-d');
        $time = $carbonDateTime->format('h:i A');

        $reservation->date = $date;
        $reservation->time = $time;
        $reservation->save();

        return redirect()->route('teacher.home');
    }
    public function deleteReservation(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->back();
    }

    public function showAcceptButton()
    {
        $reservations = Reservation::where('learner_id', 1)->get();
        return view('teacher.accept', compact('reservations'));
    }

    public function acceptLesson($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->reserved = 1;
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation updated successfully.');
    }

    public function logout()
    {
        Auth::guard('teachers')->logout();
        return redirect()->route('teacher.login')->with('success', 'Logged out successfully');
    }
}
