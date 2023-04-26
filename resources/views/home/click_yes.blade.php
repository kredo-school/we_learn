@extends('layouts.app')

@include('after_learners_nav')

@section('contents')

<div class="h-screen w-screen bg-[url('../assets/images/student_pc_bk.jpg')] bg-center bg-no-repeat">

    <div class="flex justify-center">
        <div class="h-[100px] w-[300px] bg-white bg-cover bg-center rounded-lg group mx-10 mt-20">
            <div class="h-full w-full rounded-lg flex flex-col justify-center items-center">
                <p class="text-3xl text-[#000000]">1 Ticket = 1 Hour</p>
            </div>
        </div>
    </div>

    <div class="h-screen flex justify-center items-center">
        <div class="flex flex-row">

            {{--  button for 1 ticket  --}}
            <a href="{{ route('payment') }}">
                <div id="1-ticket" class="h-[250px] w-[250px] bg-white bg-cover bg-center rounded-lg group mx-10">
                    <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex flex-col justify-center items-center">
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">1 Ticket</p>
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">$10</p>
                    </div>
                </div>
            </a>

            {{--  button for 5 tickets  --}}
            <a href="{{ route('payment') }}">
                <div id="5-tickets" class="h-[250px] w-[250px] bg-white bg-cover bg-center rounded-lg group mx-10">
                    <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex flex-col justify-center items-center">
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">5 Ticket</p>
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">$40</p>
                    </div>
                </div>
            </a>

            {{--  button for 10 tickets  --}}
            <a href="{{ route('payment') }}">
                <div id="10-tickets" class="h-[250px] w-[250px] bg-white bg-cover bg-center rounded-lg group mx-10">
                    <div class="h-full w-full hover:bg-[#000000]/70 rounded-lg flex flex-col justify-center items-center">
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">10 Ticket</p>
                        <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">$70</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
