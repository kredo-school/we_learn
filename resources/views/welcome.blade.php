z<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>We Learn</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-gsfn6EdJ41hiX9Lzvbv31QaI1Yr7rGVxGc82o17Pn89F8Z/Y4m4nvC/ziv36f0mLW8Bbc7wFaaN0d0vruQZc5Q==" crossorigin="anonymous" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


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

<body id="body" class="">
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
            <div id="leaner_carousel" onclick="showCarousel('learner')"
                class="h-[250px] w-[250px] bg-[url('/assets/images/pexels-julia-m-cameron-4144224.jpg')] bg-cover bg-center grayscale rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Learner</p>
                </div>
            </div>
            @include('modals.carousel_learner')

            {{--  button for teacher  --}}
            <div id="teacher-carousel" onclick="showCarousel('teacher')"
                class="h-[250px] w-[250px] bg-[url('/assets/images/teacher1.jpg')] bg-cover bg-center grayscale  mx-20 rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Teacher</p>
                </div>
            </div>
            @include('modals.carousel_teacher')

            {{--  button for exchange  --}}
            <div id="exchange-carousel" onclick="showCarousel('exchange')"
                class="h-[250px] w-[250px] bg-[url('/assets/images/exchange1.jpg')] bg-cover bg-center grayscale rounded-lg">
                <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex justify-center items-center">
                    <p class="text-3xl text-[#FFFFFF] shadow-lg" style="text-shadow: 0px 0px 10px #000000;">Exchange</p>
                </div>
            </div>
            @include('modals.carousel_exchange')

        </div>
    </div>
</body>

</html>
