@extends('layouts.app')

@include('registration_nav')

@section('contents')
<div class="h-screen w-screen bg-[url('/assets/images/register-modified.jpg')] bg-cover bg-center bg-no-repeat">
    <div class="max-w-md mx-auto flex items-center justify-center h-screen">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[500px]">
            <div class="text-center text-3xl font-bold mb-5">Learner's Register</div>

            {{--  name  --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
                </label>
                <input required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
            </div>

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

            {{--  age  --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="age">
                Age
                </label>
                <input required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" type="number" placeholder="Enter your age">
            </div>

            {{--  residense  --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="residense">
                Residense
                </label>
                <input required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="register" type="text" placeholder="Enter your registration details">
            </div>

            {{--  gender radio button  --}}
            <div class="mb-4 flex items-center">
                <label class="block text-gray-700 font-bold mr-4" for="gender">
                Gender
                </label>
                <div class="flex items-center">
                    <input required type="radio" class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender" value="male" checked>
                    <span class="ml-2 text-gray-700">Male</span>
                </div>
                <div class="flex items-center ml-4">
                    <input required type="radio" class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender" value="female">
                    <span class="ml-2 text-gray-700">Female</span>
                </div>
            </div>

            {{--  resister button  --}}
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Register
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
