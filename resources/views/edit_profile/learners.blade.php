@extends('layouts.app')

@include('after_learners_nav')

@section('contents')
    <div class="bg-[url('/assets/images/sakura.jpg')] bg-cover bg-center bg-no-repeat">
        <div class="flex items-center justify-center">
            <form method="post" action="{{ route('learner.edit.submit', ['id' => $learner->id]) }}" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-[1000px] mt-4" enctype="multipart/form-data">
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
                            id="name" type="text" name="name" value="{{ $learner->name }}">
                    </div>

                    {{-- change profile photo --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="profile_img">
                            Profile Picture
                        </label>
                        <div class="flex items-center">
                            <img src="/assets/images/user-circle.png" alt="User-pic" class="w-10 h-10 object-contain" />
                            <input class="hidden" id="profile_img" name="profile_img" type="file" accept="image/*">
                            <label for="profile_img"                            class="cursor-pointer appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span id="image_label">Choose image</span>
                            </label>
                        </div>
                    </div>

                    {{--  email  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" name="email" value="{{ $learner->email }}">
                    </div>

                    {{--  age  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="age">
                            Age
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" type="number" name="age" value="{{ $learner->age }}">
                    </div>

                    {{--  residense  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="residence">
                            Residence
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="regsidense" type="text" name="residence" value="{{ $learner->residence }}">
                    </div>

                    {{--  Language  --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="language">
                            Language
                        </label>
                        <input name="language" value="{{ $learner->language }}"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="register" type="text" placeholder="Which language do you speak?">
                    </div>
                </div>

                    <div class="grid grid-cols-2 gap-4">
                        {{--  gender radio button  --}}
                        <div class="mb-4 flex items-center mt-4">
                            <label class="block text-gray-700 font-bold mr-4" for="gender">
                                Gender
                            </label>
                            <div class="flex items-center">
                                <input type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                    value="male" {{ $learner->gender == 'male' ? 'checked' : '' }}>
                                <span class="ml-2 text-gray-700">Male</span>
                            </div>
                            <div class="flex items-center ml-4">
                                <input type="radio"
                                    class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out"
                                    name="gender" value="female" {{ $learner->gender == 'female' ? 'checked' : '' }}>
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
                        rows="5" name="about"> {{ $learner->about == null ? '' : $learner->about }} </textarea>
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
                    <input minlength="8"
                        class="appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Current your password...At least 8 characters">
                </div>

                {{--  New password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="newpassword">
                        New Password
                    </label>
                    <input minlength="8"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newpassword" type="password" placeholder="New password... At least 8 characters">
                </div>

                {{--  confirm password --}}
                <div class="mb-4 mx-auto w-[50%]">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Confirm Password
                    </label>
                    <input minlength="8"
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
