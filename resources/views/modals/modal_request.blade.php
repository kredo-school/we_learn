<div id="click-request" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-[1000px] max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="click-request">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mb-5 text-lg font-bold text-gray-500 dark:text-gray-400">Are you sure to <span
                        class="text-red-400">request</span> this lesson?</h3>

                {{--  schedule  --}}
                <div class="flex justify-center my-5">
                    <table class="text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Teacher
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Subject
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Online/Offline
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <!-- profile img -->
                                    <img src="{{($teacher->profile_img != null) ? $teacher->profile_img : url('/assets/images/insert-photo.jpg')}}"
                                alt="profile" class="rounded-full h-10 w-10"/>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">{{ $teacher->name }}</div>
                                    </div>
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $teacher->subject }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $teacher->reservation->date }}
                                </th>
                                <td  class="px-6 py-4">
                                    {{ $teacher->reservation->time }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $teacher->learning_mode }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{--  button for yes  --}}
                <a href="{{ route('learner.request.lesson', ['reservation' => $teacher->reservation->id, 'learner' => $learner->id]) }}">
                    <button data-modal-hide="click-request" type="button"
                        class="text-white bg-[#F6A5B3] hover:bg-[#ED4C59] focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Request</button>
                </a>
                <div class="text-xl text-red-400">
                    When the teacher accept your request,
                </div>
                <div class="text-xl text-red-400">
                    you'll get the reservation for this lesson.
                </div>
            </div>
        </div>
    </div>
</div>
