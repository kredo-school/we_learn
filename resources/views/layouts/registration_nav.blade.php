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
              <div class="hidden md:flex">
                <a href="#" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                  Login
                </a>
                <a href="#" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                  Register
                </a>
                <a href="#" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
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



        <main class="py-4">
            @yield('layouts.contents')
            
        </main>
    </div>
</body>
</html>
