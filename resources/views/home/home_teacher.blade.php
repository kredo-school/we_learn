@extends('layouts.app')

@include('after_teacher_nav')

@section('contents')
    <div
        class="h-screen w-screen bg-[url('/assets/images/bg-teacher-modified.jpg')] bg-center bg-no-repeat flex flex-col items-center justify-center py-[500px]">
        <div class="bg-white w-[1000px] flex flex-col items-center justify-center rounded-lg py-10">

            {{--  reserved table  --}}
            @if ($reservations->where('reserved', 1)->where('teacher_id', $teacher->id)->isNotEmpty())
                <div class="flex justify-center font-bold mb-5 text-2xl">You've got a reservation!!</div>
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
                                @foreach ($reservations->where('reserved', 1)->where('teacher_id', $teacher->id) as $reservation)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservation->date }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ \Carbon\Carbon::parse($reservation->time)->format('h:i A') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div data-modal-target="cancel-reservation"
                                                data-modal-toggle="cancel-reservation">
                                                <a href="#"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                                                    <img src="/assets/images/cancel.png" alt="cancel" class="h-5 w-5">
                                                </a>
                                            </div>
                                            @include('modals.modal_cancel_reservation_for_teacher')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif



            {{-- Available button for Modal --}}
            <div data-modal-target="select-available" data-modal-toggle="select-available"
                class="flex justify-center w-screen my-10">
                <a href="#"
                    class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-white font-bold py-2 px-4 rounded-md flex items-center">
                    Please select date and time when you are available.
                    <img src="../assets/images/click.png" alt="cancel" class="h-5 w-5 ml-2">
                </a>
            </div>
            @include('modals.modal_select_available_day_time')


            {{-- available schedule   --}}
            <div class="flex justify-center font-bold mb-5 text-xl">Your available time schedule</div>
            <div class="flex justify-center w-screen ">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xshttps://prod.liveshare.vsengsaas.visualstudio.com/join?C1E2FC860929087C0F1EC9CC85D4272A997D text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            @foreach ($reservations as $key => $reservation)
                                @if ($reservation->reserved != 1)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservation->date }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ \Carbon\Carbon::parse($reservation->time)->format('h:i A') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('teacher.edit_schedule', ['teacher' => $teacher->id, 'reservation' => $reservation->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                                                <img src="/assets/images/Pencil.png" alt="edit" class="h-5 w-5">
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div data-modal-target="delete-available"
                                                data-modal-toggle="delete-available-{{ $key }}">
                                                <a href="#"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                                                    <img src="/assets/images/Recycle_bin.png" alt="delete"
                                                        class="h-5 w-5">
                                                </a>
                                            </div>
                                            @include('modals.modal_delete_available')
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($reservation->learner_id == 1)
                                                <div data-modal-target="accept-available"
                                                    data-modal-toggle="accept-available-{{ $key }}">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex justify-center items-center">
                                                        <img src="/assets/images/Accept.png" alt="accept" class="h-5 w-5">
                                                    </a>
                                                    @include('modals.modal_accept_available')
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
