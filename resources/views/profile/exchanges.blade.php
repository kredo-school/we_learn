@extends('layouts.app')

@include('after_login_nav')

<main class="profile-page">
    <section class="relative block h-500-px">
        {{-- background-image --}}
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style="
            background-image: url('/assets/images/pexels-djordje-petrovic-2102415.jpg');
          ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
            style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">

        {{-- profile picture --}}
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full flex justify-center">
                            <div class="relative flex justify-center items-center w-full">
                                <div
                                    class="bg-[url('/assets/images/pexels-djordje-petrovic-2102415.jpg')] shadow-xl rounded-full h-[150px] w-[150px] align-middle border-none absolute -m-16 -ml-20 bg-center bg-cover bg-no-repeat">
                                </div>

                            </div>
                        </div>
                        {{-- button --}}
                        <div class="flex items-end justify-end w-full py-10">
                            <button onclick="location.href='{{ route('edit_profile.exchanges') }}'"
                                class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                EDIT
                            </button>
                        </div>
                    </div>
                    {{-- Name of teacher's  --}}
                    <div class="text-center flex flex-col justify-center items-center">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            John Smith
                        </h3>
                        {{-- Address --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            Regidence/Country :
                            <span class="mb-2 text-blueGray-600">LA USA</span>
                        </div>
                        {{-- Age --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-hourglass-half mr-2 text-lg text-blueGray-400"></i>
                            Age :
                            <span class="mb-2 text-blueGray-600">43</span>
                        </div>
                        {{-- Gender --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-restroom mr-2 text-lg text-blueGray-400"></i>
                            Gender :
                            <span class="mb-2 text-blueGray-600">Male</span>
                        </div>
                        {{-- Occupation --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                            Occupation :
                            <span class="mb-2 text-blueGray-600">Programmer</span>
                        </div>
                        {{-- Language --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-microphone mr-2 text-lg text-blueGray-400"></i>
                            Language :
                            <span class="mb-2 text-blueGray-600">English</span>
                        </div>
                        {{-- Category --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-microphone mr-2 text-lg text-blueGray-400"></i>
                            Category :
                            <span class="mb-2 text-blueGray-600">Programing</span>
                        </div>
                        {{-- About me  --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-face-smile mr-2 text-lg text-blueGray-400"></i>
                            About me :
                            <span class="mb-2 text-blueGray-600">Hello.I would love to teach you about
                                programing.</span>
                        </div>
                        {{-- Online/offline  --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold mb-6">
                            <i class="fa-solid fa-people-arrows mr-2 text-lg text-blueGray-400"></i>
                            Online/Offline :
                            <span class="mb-2 text-blueGray-600">Online</span>
                        </div>
                    </div>
                    {{-- <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">

                <a href="#ticket page" class="font-normal text-[#ED4C59]"><i class="fa-solid fa-ticket"></i> 3 Available</a>
              </div>
            </div>
          </div> --}}
                </div>
            </div>
        </div>
    </section>
</main>
