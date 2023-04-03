<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>We Learn</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</head>

<body>
    <div class="h-screen bg-cover bg-center bg-[url('/assets/images/students.jpg')] grayscale">
        <div class="flex flex-col justify-center items-center h-full w-full bg-[#000000]/50">
            <p class="text-9xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Learn & Teach</p>
            <p class="text-9xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Whenever You Want
            </p>
        </div>
    </div>
    <!-- Change the bg color below to F4F7FC -->
    <div class="h-screen bg-[#F4F7FC] flex justify-center items-center">
        <div class="flex flex-row">

            {{--  button for learner  --}}
            <div data-te-toggle="modal" data-te-target="#learnerModal"
                class="h-[250px] w-[250px] bg-[url('/assets/images/pexels-julia-m-cameron-4144224.jpg')] bg-cover bg-center grayscale rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Lerner</p>
                </div>
            </div>
            @include('modals.modal_learner3')
            {{--  button for teacher  --}}
            <div data-te-toggle="modal" data-te-target="#teacherModal"
                class="h-[250px] w-[250px] bg-[url('/assets/images/teacher1.jpg')] bg-cover bg-center grayscale  mx-20 rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Teacher</p>
                </div>
            </div>
            @include('modals.modal_teacher1')

            {{--  button for exchange  --}}
            <div data-te-toggle="modal" data-te-target="#exchangeModal"
                class="h-[250px] w-[250px] bg-[url('/assets/images/exchange1.jpg')] bg-cover bg-center grayscale rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Exchange</p>
                </div>
            </div>
            @include('modals.modal_exchange2')







        </div>
    </div>
</body>

</html>
