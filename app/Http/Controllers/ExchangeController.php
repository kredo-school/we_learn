<?php

namespace App\Http\Controllers;
use App\Models\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExchangeController extends Controller
{
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

        $validatedData["password"] = Hash::make($validatedData['password']);

        // Create new Teacher model instance with validated data
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
            return redirect()->route('exchange.home');
        else
            return redirect()->route('echange.login')->with('fail','Incorrect credentioals');
    }
}
