@extends('layouts.app')

@include('registration_nav')

@section('contents')
    <div class="h-screen w-screen bg-[url('/assets/images/contactus.png')] bg-cover bg-center bg-no-repeat">
        <div class="max-w-md mx-auto flex items-center justify-center h-screen">
            <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-[500px]">
                <div class="text-center text-3xl font-bold mb-5">Contact Us</div>

                {{--  name  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="name">
                        Name
                    </label>
                    <input required
                        class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4"
                        id="name" type="text" placeholder="Enter your name">
                </div>

                {{--  Email addres  --}}
                <div class="mb-2">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <input required
                        class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4"
                        id="email" type="email" placeholder="Enter your email address">
                </div>

                {{-- Text box --}}

                    <div class="mb-2">
                        <label class="block text-gray-700 font-bold mb-2" for="message">
                            You can ask us anything
                        </label>
                        <textarea required
                            class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4"
                            id="message" rows="4" placeholder="Comments here..."></textarea>
                    </div>



                {{--  button  --}}
                <div class="flex flex-col items-center justify-center">
                    <button type="submit"
                        class="flex items-center bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
                        <span class="inline-block align-middle">Send Message</span>
                        <img src="assets/images/logout2.png" alt="login" class="w-5 h-5 object-contain align-middle ml-2"
                            style="filter: brightness(0%) invert(1);">
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
