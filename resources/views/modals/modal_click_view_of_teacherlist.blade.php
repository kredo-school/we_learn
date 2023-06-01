{{--  modal  --}}
<div id="click-view" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-[800px] max-h-full">
        {{--  modal content  --}}
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            {{--  close button  --}}
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="click-view">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            {{--  copied profile  --}}
            <main class="profile-page">
                <section class="relative block h-500-px">
                    {{-- background-image --}}
                    <div class="absolute top-0 w-full h-full bg-center bg-cover">
                        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
                        <img src="{{ $teacher->profile_img != null ? $teacher->profile_img : url('/assets/images/insert-photo.jpg') }}"
                            alt="profile" class="object-cover w-full h-full" />
                    </div>
                    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                        style="transform: translateZ(0px)">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0"
                            y="0">
                            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                </section>
                <section class="relative py-16 bg-blueGray-200">

                    {{-- profile picture --}}
                    <div class="container mx-auto px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full flex justify-center">
                                        <div class="relative flex justify-center items-center w-full">

                                            <img src="{{ $teacher->profile_img != null ? $teacher->profile_img : url('/assets/images/insert-photo.jpg') }}"
                                                alt="profile" height="150px" width="150px"
                                                class="shadow-xl rounded-full h-[150px] w-[150px] align-middle border-none absolute -m-16 -ml-20 object-cover" />

                                        </div>
                                    </div>
                                    {{-- button --}}
                                    <div class="flex flex-row w-full">
                                        <div class="flex justify-start items-start w-[50%] pt-8">
                                            <a href="{{ route('learner.chat_learner') }}">
                                                <button onclick="location.href='{{ url('#') }}'"
                                                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                    Send Message
                                                </button>
                                            </a>
                                        </div>

                                        <div data-modal-target="click-request" data-modal-toggle="click-request"
                                            class="flex justify-end items-end w-[50%] pt-8">
                                            <button onclick="location.href='{{ url('#') }}'"
                                                class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                Request
                                            </button>
                                        </div>
                                        @include('modals.modal_request')
                                    </div>
                                </div>
                                {{-- Name of teacher's  --}}
                                <div class="text-center flex flex-col justify-center items-center mt-10">
                                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                        {{ $teacher->name }}
                                    </h3>
                                    {{-- Address --}}
                                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                        Regidence/Country :
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
                                        <span class="mb-2 text-blueGray-600">I'm good at
                                            {{ $teacher->subject }}.</span>
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
        </div>
    </div>
</div>


{{--  links  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
