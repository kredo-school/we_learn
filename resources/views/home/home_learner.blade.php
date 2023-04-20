@extends('layouts.app')

@include('after_login_nav')

@section('contents')

<div class="h-screen w-screen bg-[url('../assets/images/register-modified.jpg')] bg-center bg-no-repeat">
    <div class="h-screen flex justify-center items-center">
        <div class="flex flex-row">

            {{--  button for search teacher  --}}
            <div data-te-toggle="modal" data-te-target="#searchModal" class="h-[250px] w-[250px] rounded-lg bg-white">
                <div class="h-full w-full flex flex-col justify-center items-center">
                    <p class="py-3 text-3xl text-[#000000] ml-5">Search</p>
                    <p class="text-3xl text-[#000000] ml-5">Teacher</p>
                </div>
            </div>





            {{--  button for buy ticket  --}}
            <div data-te-toggle="modal" data-te-target="#ticketModal" class="h-[250px] w-[250px] mx-20 rounded-lg bg-white">
                <div class="h-full w-full flex flex-col justify-center items-center">
                    <p class="py-3 text-3xl text-[#000000]">Buy</p>
                    <p class="text-3xl text-[#000000]">Ticket</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
