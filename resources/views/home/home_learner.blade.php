@extends('layouts.app')

@include('after_learners_nav')

@section('contents')

<div class="h-screen w-screen bg-[url('../assets/images/register-modified.jpg')] bg-center bg-no-repeat">
    <div class="h-screen flex justify-center items-center">
        <div class="flex flex-row">

            {{--  button for search teacher  --}}
            <div data-te-toggle="modal" data-te-target="#searchModal" class="h-[250px] w-[250px] rounded-lg bg-white group">
                <div class="h-full w-full flex flex-col justify-center items-center hover:bg-[#000000]/70">
                    <p class="text-3xl text-[#000000] ml-5 group-hover:text-[#FFFFFF] hover:shadow-lg">Search</p>
                    <p class="text-3xl text-[#000000] ml-5 group-hover:text-[#FFFFFF] hover:shadow-lg">Teacher</p>
                </div>
            </div>


            {{--  button for buy ticket also button for modal --}}
            <div data-modal-target="buy-ticket" data-modal-toggle="buy-ticket" class="h-[250px] w-[250px] mx-20 rounded-lg bg-white group">
                <div class="h-full w-full flex flex-col justify-center items-center hover:bg-[#000000]/70">
                    <p class="py-3 text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">Buy</p>
                    <p class="text-3xl text-[#000000] group-hover:text-[#FFFFFF] hover:shadow-lg">Ticket</p>
                </div>
            </div>
            @include('modals.modal_click_buy_ticket')

        </div>
    </div>
</div>
@endsection
