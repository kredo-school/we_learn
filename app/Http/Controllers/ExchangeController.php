<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExchangeController extends Controller
{
    public function index()
    {
        return view('auth.exchanges_register');
    }

    public function login()
    {
        return view('auth.exchanges_login');
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
            'category' => 'required|string|max:255',
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);

        // Create new Teacher model instance with validated data
        $exchange = new Exchange($validatedData);

        // Save the exchange model to the database
        $exchange->save();

        // Redirect to a success page
        return redirect()->route('/register/exchange');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:exchanges'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if (Auth::guard('exchanges')->attempt(['email' => $request->email, 'password' => $request->password]))

        {
            // Authentication passed...
            return redirect()->route('home_exchange');
        } else {
            return redirect()->back()->withErrors([
                'message' => 'Invalid credentials',
            ]);
        }
    }
}
