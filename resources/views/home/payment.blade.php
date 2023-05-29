@extends('layouts.app')

@section('contents')

@include('after_learners_nav')

<div class="h-screen w-screen bg-[url('/assets/images/money.jpg')] bg-center bg-no-repeat">

    <div class="flex items-center justify-center h-screen">
        <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-[1000px]">
            <div class="text-center text-3xl font-bold mb-5">Payment</div>
            <div class="grid grid-cols-2 gap-4">

                {{--  Card number  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="cardnumber">
                        Card Number
                    </label>
                    <input required
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="cardnumber" type="text" placeholder="Enter card number">
                </div>

                {{--  image  --}}
                <div class="ml-10">
                    <img src="/assets/images/creditcards.png" alt="creditcards">
                </div>

                {{--  expire date  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="expiredate">
                        Expire Date
                    </label>
                    <input required minlength="8"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="expiredate" type="text" placeholder="Enter Expire Date">
                </div>

                {{--  CVC  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="cvc">
                        CVC
                    </label>
                    <input required
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="cvc" type="number" placeholder="Enter CVC">
                </div>

                {{--  cardholder name  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="name">
                        Cardholder Name
                    </label>
                    <input required
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="text" placeholder="Enter Cardholder Name">
                </div>

                {{--  country  --}}
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="country">
                        Country
                    </label>
                    <input required
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="country" type="text" placeholder="Enter country">
                </div>

            </div>

            {{--  register button  --}}
            <div class="flex items-center justify-center mt-8">
                <button type="submit"
                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md flex items-center">
                    {{ $payButtonText }}
                </button>
            </div>
        </form>
    </div>




</div>

@endsection
