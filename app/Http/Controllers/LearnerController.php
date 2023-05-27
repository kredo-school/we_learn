<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use App\Models\Teacher;
use App\Models\Reservation;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class LearnerController extends Controller
{
    private $learner;

    public function __construct(Learner $learner)
    {
        $this->learner = $learner;
    }

    public function index()
    {
        $learner = Learner::find(Auth::guard('learners')->id());

        return view('home.home_learner', ['learner' => $learner]);
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

        $validatedData["password"] = Hash::make($validatedData["password"]);

        // Create a new user instanc{{ e }}
        $learner = new Learner($validatedData);

        // Save the new user to the database
        $learner->save();

        // Login user
        $creds = $request->only('ema{{ il', 'passw }}ord');

        if (Auth::guard('learners')->attempt($creds))
            return redirect()->route('learner.home');
    }
    public function login(Request $request)
    {
        //validate inputs
        $request->validate([
            'email' => 'required|email|exists:learners,email',
            'password' => 'required|min:8'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('learners')->attempt($creds)) {
            $learner = Learner::find(Auth::guard('learners')->id());
            return view('home.home_learner', ['learner' => $learner]);
        } else
            return redirect()->route('learner.login')->with('fail', 'Incorrect credentioals');
    }

    public function showProfile($id)
    {
        $learner = Learner::find($id);
        return view('profile.learners', ['learner' => $learner]);
    }

    public function editProfile($id)
    {
        $learner = Learner::find($id);
        return view('edit_profile.learners', ['learner' => $learner]);
    }

    public function editProfileSubmit(Request $request, $id)
    {
        $learner = Learner::findOrFail($id);

        if ($request->hasFile('profile_img')) {
            $path = $request->file('profile_img')->getRealPath();
            $img = file_get_contents($path);
            $base64 = base64_encode($img);
            $image = 'data:' . $request->file('profile_img')->getMimeType() . ';base64,' . $base64;
            $learner->profile_img = $image;
        }

        $learner->name = $request->input('name');
        $learner->email = $request->input('email');
        $learner->age = $request->input('age');
        $learner->gender = $request->input('gender');
        $learner->residence = $request->input('residence');
        $learner->language = $request->input('language');
        $learner->about = $request->input('about');

        $learner->update();

        return redirect()->route('learner.show.profile', ['id' => $learner->id]);
    }

    public function home()
    {
        $learner = Learner::find(Auth::guard('learners')->id());
        return view('home.home_learner', ['leaner' => $learner]);
    }

    public function searchTeacher(Request $request)
    {
        $teachers = Teacher::where('learning_mode', $request->learning_mode)->where('subject', $request->subject);

        if ($request->gender != 'either') {
            $teachers = $teachers->where('gender', $request->gender);
        }

        if ($request->learning_mode == 'offline') {
            $teachers = $teachers->where('location', 'like', "%{$request->location}%");
        }

        $all_teacher = $teachers->get();

        $teachers = $all_teacher->filter(function ($teacher) use ($request) {
            $reservations = $teacher->reservations;

            $reservation = $reservations->filter(function ($reservation) use ($request) {
                $reservationDateTime = $request->input('datetime');

                // Convert the input string to a Carbon instance
                $carbonDateTime = Carbon::createFromFormat('M j, Y h:i A', $reservationDateTime);

                // Separate the date and time
                $date = $carbonDateTime->format('Y-m-d');
                $time = $carbonDateTime->format('h:i A');

                return $reservation->date == $date && $reservation->time == $time;
            })->first();

            $teacher->reservation = $reservation;

            return $reservation;
        })->values();

        $learner = Learner::find(Auth::guard('learners')->id());
        return view('home.teacher_list', compact('teachers', 'learner'));
    }

    public function requestLesson($reservationId, Learner $learner)
    {
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->learner_id = $learner->id;
        $reservation->save();

        return view('home.home_learner', ['learner' => $learner]);
    }

    public function showSchedule()
    {
        $learner = Learner::find(Auth::guard('learners')->id());
        // Get the currently logged-in learner's ID
        $learnerId = Auth::guard('learners')->id();

        // Get the reservations with reserved column value of 1 and matching learner_id
        $reservations = Reservation::where('reserved', 1)
            ->where('learner_id', $learnerId)
            ->get();

        // Get the schedule IDs from the reservations
        $scheduleIds = $reservations->pluck('schedule_id');

        // Get the schedules based on the IDs
        $schedules = Reservation::whereIn('id', $scheduleIds)->get();
        // Pass the schedules to the view
        return view('home.lesson_schedule_learner', ['schedules' => $schedules, 'learner' => $learner, 'reservations' => $reservations]);
    }


    public function deleteReservation(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->back();
    }
}


