@extends('layouts.app')

@include('registration_nav')

@section('contents')
    <div class="h-screen w-screen bg-[url('/assets/images/bg_exchange-modified.jpg')] bg-cover bg-center bg-no-repeat">
        <div class="flex items-center justify-center h-screen">
            <form action="{{ route('exchange.register') }}" method="post"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[1000px]">
                @csrf
                <div class="text-center text-3xl font-bold mb-5">Exchange's Register</div>
                <div class="grid grid-cols-2 gap-4">

                    {{--  name  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name
                        </label>
                        <input name="name" value="{{ old('name') }}"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Enter your name">
                        @error('name')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    {{--  email  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input name="email" value="{{ old('email') }}"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Enter your email address">
                        @error('email')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    {{--  password  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input name="password" value="{{ old('password') }}" minlength="8"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="Enter your password">
                        @error('password')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    {{--  age  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="age">
                            Age
                        </label>
                        <input name="age" value="{{ old('age') }}"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" type="number" placeholder="Enter your age">
                        @error('age')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    {{--  gender radio button  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="gender">
                            Gender
                        </label>
                        <input type="radio" @if (old('gender') == 'male') checked @endif
                            class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                            value="male">
                        <span class="ml-2 text-gray-700">Male</span>
                        <input type="radio" @if (old('gender') == 'female') checked @endif
                            class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                            value="female">
                        <span class="ml-2 text-gray-700">Female</span>
                    </div>

                    {{--  occupation  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="occupation">
                            Occupation
                        </label>
                        <select
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="occupation" name="occupation">
                            <option value="" hidden>Select your occupation</option>
                            <option value="doctor" @if (old('occupation') == 'doctor') selected @endif>Doctor</option>
                            <option value="engineer" @if (old('occupation') == 'engineer') selected @endif>Engineer</option>
                            <option value="teacher" @if (old('occupation') == 'teacher') selected @endif>Teacher</option>
                            <option value="student" @if (old('occupation') == 'student') selected @endif>Student</option>
                        </select>
                        @error('occupation')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    {{--  residence  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="residence">
                            Residence
                        </label>
                        <input name="residence" value="{{ old('residence') }}"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="register" type="text" placeholder="Enter your registration details">
                    </div>

                    {{--  category select form  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="category">
                            Category
                        </label>
                        <select
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="category" name="category">
                            <option value="" hidden>Select category</option>
                            <option value="programing" @if (old('category') == 'programing') selected @endif>Programing</option>
                            <option value="english" @if (old('category') == 'english') selected @endif>English</option>
                            <option value="something" @if (old('category') == 'something') selected @endif>something</option>
                            <option value="anything" @if (old('category') == 'anything') selected @endif>anything</option>
                        </select>
                        @error('category')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{--  register button  --}}
                <div class="flex items-center justify-center mt-8">
                    <button type="submit"
                        class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
