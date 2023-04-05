<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <!-- navbar -->
        @include('navbar')
        <div class="h-screen bg-cover bg-center bg-[url('/assets/images/pexels-buro-millennial-1438072.jpg')] grayscale">
            <div class="flex flex-col justify-center items-center h-full w-full bg-[#000000]/70">
                <p class="text-9xl text-[#FFFFFF]">Learn & Teach</p>
                <p class="text-9xl text-[#FFFFFF]">Whenever You Want</p>
            </div>
        </div>
        <!-- Change the bg color below to F4F7FC -->
        <div class="flex-grow flex justify-center py-20">
    <div class="h-screen">
        <div class="flex flex-row">
            <div class="h-[250px] w-[200px] relative bg-[url('/assets/images/pexels-julia-m-cameron-4144224.jpg')] bg-cover bg-center px-4 flex flex-col justify-center items-center mx-4 rounded-lg grayscale shadow-lg">
                <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 rounded-lg"></div>
                <p class="text-3xl text-[#FFFFFF] z-10 relative">Learner</p>
            </div>
            <div class="h-[250px] w-[200px] relative bg-[url('/assets/images/pexels-karolina-grabowska-7692556.jpg')] bg-cover bg-center px-4 flex flex-col justify-center items-center mx-4 rounded-lg grayscale shadow-lg">
                <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 rounded-lg"></div>
                <p class="text-3xl text-[#FFFFFF] z-10 relative">Teacher</p>
            </div>
            <div class="h-[250px] w-[200px] relative bg-[url('/assets/images/pexels-julia-m-cameron-4144224.jpg')] bg-cover bg-center px-4 flex flex-col justify-center items-center ml-4 rounded-lg grayscale shadow-lg">
                <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 rounded-lg"></div>
                <p class="text-3xl text-[#FFFFFF] z-10 relative">Exchange</p>
            </div>
        </div>
    </div>
</div>
     @include('footer') 

 
 



    </body>
    <!--footer>

</html>
