@extends('layouts.app')

@include('after_learners_nav')

@section('contents')
<div class="h-screen w-screen bg-[url('../assets/images/teacherlist.jpg')] bg-center bg-no-repeat">
    <div class="flex items-center justify-center h-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[800px] bg-white">

            <div class="text-xl text-center font-bold my-10 underline">You Can Request To These Teachers</div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
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
                        <td class="px-6 py-4 text-center">
                            Tokyo Shibuya
                        </td>
                        <td class="px-6 py-4">
                            <div data-modal-target="click-view" data-modal-toggle="click-view" class="text-center">
                                <a href="#"
                                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md">
                                    View
                                </a>
                            </div>
                            @include('modals.modal_click_view_of_teacherlist')
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="/assets/images/user-circle.png" alt="image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">Neil Sims</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 text-center">
                            Tokyo Shibuya
                        </td>
                        <td class="px-6 py-4">
                            <div data-modal-target="click-view" data-modal-toggle="click-view" class="text-center">
                                <a href="#"
                                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md">
                                    View
                                </a>
                            </div>
                            @include('modals.modal_click_view_of_teacherlist')
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>



</div>
@endsection
