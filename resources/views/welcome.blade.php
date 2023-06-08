@extends('layouts.app')

@section('contents')
    <script src="{{ mix('/js/modal.js') }}"></script>

    @include('landing_nav')
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
@endsection
