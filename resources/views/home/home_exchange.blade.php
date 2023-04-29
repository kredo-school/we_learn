@extends('layouts.app')

@include('after_login_nav')

@section('contents')

<div class="h-screen w-screen bg-[url('../assets/images/bg_exchange-modified.jpg')] bg-center bg-no-repeat flex flex-col items-center justify-center">
    <div class="bg-white w-[1200px] flex flex-col items-center justify-center rounded-lg">
        {{--  cotegory select form  --}}
        <div class="ml-10 mt-5 flex flex-col items-center">
            <div class="text-xl font-bold mb-2 underline">The category is</div>
            <div class="w-[400px]">
            <label for="categories" class="block mb-2 text-m font-bold text-gray-900 dark:text-white"></label>
            <select id="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Programing</option>
                <option>Law</option>
                <option>Business</option>
                <option>Arts</option>
            </select>
            </div>
        </div>

        <div class="ml-5 mt-15 flex justify-center w-screen mt-20">

            {{--  textbox for what I want to know and what I can teach --}}
            <form>
                <div class="w-[600px] mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only"></label>
                        <textarea id="comment" rows="4" class="w-full px-0 text-m font-bold text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white" required>What I want to know:</textarea>
                    </div>
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only"></label>
                        <textarea id="comment" rows="4" class="w-full px-0 text-m font-bold text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white" required>What I Can Teach:</textarea>
                    </div>
                    {{--  post button  --}}
                    <div class="grid justify-items-end px-3 py-2 border-t dark:border-gray-600">
                        <div class="my-1 ">
                            <a href="#"
                                class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md">
                                Post
                            </a>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        {{--  lists for users who posted  --}}
        <div class="flex justify-center w-screen mt-20 mb-20">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-[1000px] text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Want to Know & Can Teach
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                View
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/assets/images/user-circle.png" alt="image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">Neil Sims</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <div>I want to know</div>
                                <div>I can teach</div>

                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    1 hour ago
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="my-1 ">
                                    <a href="{{ route('chat_exchange') }}"
                                        class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md">
                                        View
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
