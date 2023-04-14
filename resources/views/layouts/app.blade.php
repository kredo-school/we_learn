<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-z1PTOm0wioyCAOAK6U5iybfM5ZJTYgZfRAF2B+Pd6J3K6OWw/m6cE6H5pIFqucyg5l5WyR8mU/+QYU6ig3U6Kw==" crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-white">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <a href="/">
                <img src="assets/images/logo.png" alt="Logo" class="h-[100px] w-[100px]">
              </a>
            </div>
            <div class="flex items-center">
                <div class="relative">
                  <button class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                    Login
                  </button>
                  <div class="absolute z-10 hidden bg-white rounded-lg shadow-md">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Learner
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Teacher
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Exchange
                    </a>
                  </div>
                </div>
                <div class="relative">
                  <button class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                    Register
                  </button>
                  <div class="absolute z-10 hidden bg-white rounded-lg shadow-md">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Learner
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Teacher
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                      Exchange
                    </a>
                  </div>
                </div>
                <a href="#" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2 mr-6">
                  Contact us
                </a>
              </div>




              <div class="md:hidden">
                <button type="button" class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200" aria-label="Toggle menu">
                  <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current">
                    <path d="M3 4h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 9h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 14h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"></path>
                  </svg>
                </button>
              </div>
            </div>

          </nav>




            @yield('contents')

            @include('layouts.footer')
            @include("registration_nav")
            @include("after_learners_nav")
            @include("after_login_nav")


    </div>
</body>
</html>
