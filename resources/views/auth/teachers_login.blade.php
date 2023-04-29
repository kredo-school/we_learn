@extends('layouts.app')

@include('registration_nav')

@section('contents')
<div class="h-screen w-screen bg-[url('/assets/images/teacher-login.jpg')] bg-cover bg-center bg-no-repeat">
    <div class="max-w-md mx-auto flex items-center justify-center h-screen">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[500px]">
            <div class="text-center text-3xl font-bold mb-5">Teacher's Login</div>

            {{--  email  --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                Email Address
                </label>
                <input required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address">
            </div>

            {{--  password  --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                Password
                </label>
                <input required minlength="8" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
            </div>

            {{--  button  --}}
            <div class="flex flex-col items-center justify-center">
                <button type="submit" class="flex items-center bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
                  <span class="inline-block align-middle">Login</span>
                </button>
                <div class="mt-6">
                    <a href="#" class="text-sm text-black hover:text-[#ED4C59] text-center">
                    Forgot your password?</a>
                </div>
                <div class="mt-2">
                    <a href="#" class="text-sm text-black hover:text-[#ED4C59] text-center">
                    Don't have an account? Register here.</a>
                </div>
              </div>
        </form>
    </div>
</div>

@endsection
