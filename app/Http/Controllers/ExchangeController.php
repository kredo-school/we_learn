<?php

namespace App\Http\Controllers;
use App\Models\Exchange;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class ExchangeController extends Controller
{
    private $exchange;

    public function __construct(Exchange $exchange)
    {
        $this->exchange = $exchange;
    }
    public function register(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:exchanges'],
            'password' => ['required', 'string', 'min:8'],
            'age' => ['required', 'integer', 'min:18'],
            'gender' => ['required', 'in:male,female'],
            'occupation' => ['required', 'in:doctor,engineer,teacher,student'],
            'residence' => ['required', 'string'],
            'category' => ['required', 'in:programing,english,something,anything'],
        ]);

        $validatedData["password"] = Hash::make($validatedData['password']);

        // Create new Ecxhange model instance with validated data
        $exchange = new Exchange($validatedData);

        // Save the exchange model to the database
        $exchange->save();

        // login user
        $creds = $request->only('email','password');

        if (Auth::guard('exchanges')->attempt($creds))
            return redirect()->route('exchange.home');

    }

    public function login(Request $request)
    {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:exchanges,email',
            'password'=>'required|min:8'
        ]);
        $creds = $request->only('email','password');

        if (Auth::guard('exchanges')->attempt($creds))
        {
            $exchange = Exchange::find(Auth::guard('exchanges')->id());
            return view('home.home_exchange', ['exchange' => $exchange]);
        }
        else
            return redirect()->route('exchange.login')->with('fail','Incorrect credentioals');
    }

    public function showProfile($id)
    {
        $exchange = Exchange::find($id);
        return view('profile.exchanges', ['exchange' => $exchange]);
    }

    public function editProfile($id)
    {
        $exchange = Exchange::find($id);
        return view('edit_profile.exchanges', ['exchange' => $exchange]);
    }

    public function editProfileSubmit(Request $request, $id)
    {
        $exchange = Exchange::findOrFail($id);
        if ($request->hasFile('profile_img'))
        {
            $path = $request->file('profile_img')->getRealPath();
            $img = file_get_contents($path);
            $base64 = base64_encode($img);
            $image = 'data:' . $request->file('profile_img')->getMimeType() . ';base64,' . $base64;
            $exchange->profile_img = $image;
        }

        $exchange->name = $request->input('name');
        $exchange->email = $request->input('email');
        $exchange->age = $request->input('age');
        $exchange->gender = $request->input('gender');
        $exchange->occupation = $request->input('occupation');
        $exchange->residence = $request->input('residence');
        $exchange->about = $request->input('about');
        $exchange->category = $request->input('category');


        $exchange->update();

        return redirect()->route('exchange.show.profile', ['id' => $exchange->id]);
    }

        public function home()
    {
        $exchange = Exchange::find(Auth::guard('exchanges')->id());
        return view('home.home_exchange', ['exchange' => $exchange]);
    }
}
