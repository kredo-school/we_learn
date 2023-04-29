@extends('layouts.app')

@include('registration_nav')

@section('contents')
    <div class="bg-[url('/assets/images/sakura.jpg')] bg-cover bg-center bg-no-repeat">
        <div class="flex items-center justify-center">
            <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-[1000px] mt-4">
                <div class="text-center text-3xl font-bold mb-5">Edit Profile</div>
                <div class="grid grid-cols-2 gap-4">

                    {{--  name  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name
                        </label>
                        <input required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Angelina Jolie">
                    </div>

                    {{-- change profile photo --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="profile_picture">
                            Profile Picture
                        </label>
                        <div class="flex items-center">
                            <img src="../assets/images/user-circle.png" alt="User-pic" class="w-10 h-10 object-contain" />
                            <input class="hidden" id="profile_picture" name="profile_picture" type="file" accept="image/*" required>
                            <label for="profile_picture" class="cursor-pointer appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
                            id="email" type="email" placeholder="Email address">
                    </div>

                    {{--  age  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="age">
                            Age
                        </label>
                        <input required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" type="number" placeholder="Enter your age">
                    </div>

                    {{--  occupation  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="occupation">
                            Occupation
                        </label>
                        <input required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="occupation" type="text" placeholder="What is your occupation">
                    </div>

                    {{--  residense  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="residense">
                            Residense
                        </label>
                        <input required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="regsidense" type="text" placeholder="New York">
                    </div>

                    {{--  Language  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="language">
                            Language
                        </label>
                        <select required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="language" name="language">
                            <option value="" hidden>Select your language</option>
                            <option value="programing">English</option>
                            <option value="english">Japanese</option>
                            <option value="something">Chinese</option>
                            <option value="anything">Spanish</option>
                        </select>
                    </div>
                </div>

                    <div class="grid grid-cols-2 gap-4">
                        {{--  gender radio button  --}}
                        <div class="mb-4 flex items-center mt-4">
                            <label class="block text-gray-700 font-bold mr-4" for="gender">
                                Gender
                            </label>
                            <div class="flex items-center">
                                <input required type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out"
                                    name="gender" value="male" checked>
                                <span class="ml-2 text-gray-700">Male</span>
                            </div>
                            <div class="flex items-center ml-4">
                                <input required type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out"
                                    name="gender" value="female">
                                <span class="ml-2 text-gray-700">Female</span>
                            </div>
                        </div>

                        {{-- Online/Offline --}}
                        <div class="mb-4 flex items-center mt-4">
                            <label class="block text-gray-700 font-bold mr-4" for="online">
                                Online or Offline
                            </label>
                            <div class="flex items-center">
                                <input required type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out"
                                    name="online" value="online" checked>
                                <span class="ml-2 text-gray-700">Online</span>
                            </div>
                            <div class="flex items-center ml-4">
                                <input required type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out"
                                    name="online" value="offline">
                                <span class="ml-2 text-gray-700">Offline</span>
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
                        rows="5" placeholder="Hello.I would love to teach you about programing."></textarea>
                </div>

                {{--  Update Button  --}}
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-8 mt-8">
                        Update Profile
                    </button>
                </div>

                {{--  current password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input required minlength="8"
                        class="appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Current your password...At least 8 characters">
                </div>

                {{--  New password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="newpassword">
                        New Password
                    </label>
                    <input required minlength="8"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newpassword" type="password" placeholder="New password... At least 8 characters">
                </div>

                {{--  confirm password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Confirm Password
                    </label>
                    <input required minlength="8"
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
