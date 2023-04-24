@extends('layouts.app')

@include('after_login_nav')

<main class="profile-page">
  <section class="relative block h-500-px">
    {{-- background-image --}}
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('/assets/images/pexels-andrea-piacquadio-3781789.jpg');
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
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
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">

                <div class="bg-[url('/assets/images/pexels-andrea-piacquadio-3781789.jpg')] shadow-xl rounded-full h-[150px] w-[150px] align-middle border-none absolute -m-16 -ml-20 bg-center bg-cover bg-no-repeat"></div>

              </div>
            </div>
            {{-- button --}}
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                <div class="py-6 px-3 mt-32 sm:mt-0">
                    <button onclick="location.href='{{ url('#') }}'"
                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    EDIT
                    </button>
                </div>
              </div>
          </div>
          {{-- Name of teacher's  --}}
          <div class="text-center mt-12 flex flex-col justify-center items-center">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
              Jennie Wilson
            </h3>
            {{-- Address --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                Regidence/Country :
              <span class="mb-2 text-blueGray-600">Los Angeles, California</span>
            </div>
            {{-- Age --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fa-solid fa-hourglass-half mr-2 text-lg text-blueGray-400"></i>
              Age :
              <span class="mb-2 text-blueGray-600">19</span>
            </div>
            {{-- Gender --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fa-solid fa-restroom mr-2 text-lg text-blueGray-400"></i>
              Gender :
              <span class="mb-2 text-blueGray-600">Female</span>
            </div>
            {{-- Occupation --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
              <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
              Occupation :
              <span class="mb-2 text-blueGray-600">Solution Manager - Creative Tim Officer</span>
            </div>
            {{-- Language --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fa-solid fa-microphone mr-2 text-lg text-blueGray-400"></i>
                Language :
                <span class="mb-2 text-blueGray-600">English</span>
            </div>
            {{--Subject  --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fa-solid fa-book mr-2 text-lg text-blueGray-400"></i>
                Subject :
                <span class="mb-2 text-blueGray-600">I'm good at Math.</span>
            </div>
            {{--About me  --}}
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                <i class="fa-solid fa-face-smile mr-2 text-lg text-blueGray-400"></i>
                About me :
                <span class="mb-2 text-blueGray-600">Hello.I'm excited to meet you!</span>
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

                <a href="#ticket page" class="font-normal text-[#ED4C59]"><i class="fa-solid fa-ticket"></i>    3 Available</a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
