@extends('layouts.app')

@include('after_login_nav')

@section('contents')

<div class="flex justify-center font-bold mb-5 text-2xl">You’ve got reservation!! </div>

{{--  reserved table  --}}
<div class="flex justify-center w-screen">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cancel
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        21/03/2023
                    </th>
                    <td class="px-6 py-4">
                        5:00 PM
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                            <img src="../assets/images/cancel.png" alt="cancel" class="h-5 w-5">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{--  button  --}}
<div class="flex justify-center w-screen my-10">
    <a href="#" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md flex items-center">
        Please select date and time when you are available.
        <img src="../assets/images/click.png" alt="cancel" class="h-5 w-5 ml-2">
    </a>
</div>


{{-- available schedule   --}}
<div class="flex justify-center font-bold mb-5 text-xl">Your available time schedule</div>
<div class="flex justify-center w-screen ">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DElete
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Accept
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        21/03/2023
                    </th>
                    <td class="px-6 py-4">
                        5:00 PM
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                            <img src="../assets/images/Pencil.png" alt="cancel" class="h-5 w-5">
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                            <img src="../assets/images/Recycle_bin.png" alt="cancel" class="h-5 w-5">
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                            <img src="../assets/images/Accept.png" alt="cancel" class="h-5 w-5">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>







@endsection
