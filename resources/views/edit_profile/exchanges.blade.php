@extends('layouts.app')

@section('contents')

 @include('after_login_nav')
    <div class="bg-[url('/assets/images/sakura.jpg')] bg-cover bg-center bg-no-repeat">
        <div class="flex items-center justify-center">
            <form method="post" action="{{ route('exchange.edit.submit', ['id' => $exchange->id]) }}" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-[1000px] mt-4" enctype="multipart/form-data">
                @csrf
                <div class="text-center text-3xl font-bold mb-5">Edit Profile</div>
                <div class="grid grid-cols-2 gap-4">

                    {{--  name  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" name="name" value="{{ $exchange->name }}">
                    </div>

                    {{-- change profile photo --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="profile_img">
                            Profile img
                        </label>
                        <div class="flex items-center">
                            <img src="/assets/images/user-circle.png" alt="User-pic" class="w-10 h-10 object-contain" />
                            <input class="hidden" id="profile_img" name="profile_img" type="file"
                                accept="image/*" >
                            <label for="profile_img"
                                class="cursor-pointer appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span id="image_label">Choose image</span>
                            </label>
                        </div>
                    </div>

                    {{--  email  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" name="email" value="{{ $exchange->email }}">
                    </div>

                    {{--  age  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="age">
                            Age
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" type="number" name="age" value="{{ $exchange->age }}">
                    </div>

                   {{--  occupation  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="occupation">
                            Occupation
                        </label>
                        <select name="occupation"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="occupation" name="occupation">
                            <option value="" hidden>Select your occupation</option>
                            <option value="doctor" {{ $exchange->occupation == 'doctor' ? 'selected' : '' }}>Doctor
                            </option>
                            <option value="engineer" {{ $exchange->occupation == 'engineer' ? 'selected' : '' }}>Engineer
                            </option>
                            <option value="teacher" {{ $exchange->occupation == 'teacher' ? 'selected' : '' }}>Teacher
                            </option>
                            <option value="student" {{ $exchange->occupation == 'student' ? 'selected' : '' }}>Student
                            </option>
                        </select>
                    </div>

                    {{--  residense  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="residence">
                            Residence
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="regsidence" type="text" name="residence" value="{{ $exchange->residence }}">
                    </div>

                    {{--  category select form  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="category">
                            Category
                        </label>
                        <select
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="category" name="category">
                            <option value="" hidden>Select your category</option>
                            <option value="programming" {{ $exchange->category == 'programming' ? 'selected' : '' }}>Programming
                            </option>
                            <option value="english" {{ $exchange->category == 'english' ? 'selected' : '' }}>English
                            </option>
                            <option value="something" {{ $exchange->category == 'something' ? 'selected' : '' }}>Something
                            </option>
                            <option value="anything" {{ $exchange->category == 'anything' ? 'selected' : '' }}>Anything
                            </option>
                        </select>
                    </div>

                    {{--  gender radio button  --}}
                    <div class="mb-4 flex items-center mt-4">
                        <label class="block text-gray-700 font-bold mr-4" for="gender">
                            Gender
                        </label>
                        <div class="flex items-center">
                            <input type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                value="male" {{ $exchange->gender == 'male' ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Male</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <input type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                value="female" {{ $exchange->gender == 'female' ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Female</span>
                        </div>
                    </div>

                </div>

                {{-- About me --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="aboutme">
                        About me
                    </label>
                    <textarea
                        class="resize-none border rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="5" name="about"> {{ $exchange->about == null ? '' : $exchange->about }}</textarea>
                </div>

                {{--  Update Button  --}}
                <div class="flex items-center justify-center">
                    <input type="submit"
                        class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-8 mt-8" value="Update Profile">
                </div>

                {{--  current password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input  minlength="8"
                        class="appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Current your password...At least 8 characters">
                </div>

                {{--  New password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="newpassword">
                        New Password
                    </label>
                    <input  minlength="8"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newpassword" type="password" placeholder="New password... At least 8 characters">
                </div>

                {{--  confirm password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Confirm Password
                    </label>
                    <input  minlength="8"
                        class="appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                        id="confirmpassword" type="password" placeholder="New password... At least 8 characters">
                </div>

                {{--  change password Button  --}}
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-8">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
