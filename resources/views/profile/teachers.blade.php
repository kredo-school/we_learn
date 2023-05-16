@extends('layouts.app')

@include('after_teacher_nav')

<main class="profile-page">
    <section class="relative block h-500-px">
        {{-- background-image --}}
        <div class="absolute top-0 w-full h-full bg-center bg-cover">
        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        <img src="{{($teacher->profile_img != null) ? $teacher->profile_img : url('/assets/images/insert-photo.jpg')}}"
        alt="profile" class="object-cover w-full h-full"/>
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
                                <img src="{{($teacher->profile_img != null) ? $teacher->profile_img : url('/assets/images/insert-photo.jpg')}}"
                                alt="profile" height="150px" width="150px" class="shadow-xl rounded-full h-[150px] w-[150px] align-middle border-none absolute -m-16 -ml-20 object-cover"/>
                            </div>
                        </div>
                        {{-- button --}}
                        <div class="flex items-end justify-end w-full py-10">
                            <button onclick="location.href='{{ route('teacher.edit.profile', ['id' => $teacher->id])}}'"
                                class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                EDIT
                            </button>
                        </div>
                    </div>
                    {{-- Name of teacher's  --}}
                    <div class="text-center flex flex-col justify-center items-center">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{ $teacher->name }}
                        </h3>
                        {{-- Residence --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            Residence/Country :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->residence }}</span>
                        </div>
                        {{-- Age --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-hourglass-half mr-2 text-lg text-blueGray-400"></i>
                            Age :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->age }}</span>
                        </div>
                        {{-- Gender --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-restroom mr-2 text-lg text-blueGray-400"></i>
                            Gender :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->gender }}</span>
                        </div>
                        {{-- Occupation --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                            Occupation :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->occupation }}</span>
                        </div>
                        {{-- Language --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-microphone mr-2 text-lg text-blueGray-400"></i>
                            Language :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->language }}</span>
                        </div>
                        {{-- Subject  --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-book mr-2 text-lg text-blueGray-400"></i>
                            Subject :
                            <span class="mb-2 text-blueGray-600">I'm good at {{ $teacher->subject }}</span>
                        </div>
                        {{-- About me  --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                            <i class="fa-solid fa-face-smile mr-2 text-lg text-blueGray-400"></i>
                            About me :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->about }}</span>
                        </div>
                        {{-- Online/offline  --}}
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold mb-6">
                            <i class="fa-solid fa-people-arrows mr-2 text-lg text-blueGray-400"></i>
                            Online/Offline :
                            <span class="mb-2 text-blueGray-600">{{ $teacher->learning_mode }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
