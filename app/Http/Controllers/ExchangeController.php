<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index()
    {
        return view('auth.exchanges_register');
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

        // Create new Teacher model instance with validated data
        $exchange = new Exchange($validatedData);

        // Save the exchange model to the database
        $exchange->save();

        // Redirect to a success page
        return redirect()->route('/register/exchange');
    }
}
