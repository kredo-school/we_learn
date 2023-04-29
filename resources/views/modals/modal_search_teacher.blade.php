{{--  modal  --}}
<div id="search-teacher" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-[800px] max-h-full">
        {{--  modal content  --}}
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            {{--  close button  --}}
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="search-teacher">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>


            <div class="px-6 py-6 lg:px-8">
             {{--  text  --}}
                <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white flex justify-center">
                    What kind of teacher are you looking for?
                </h3>
                <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white flex justify-center">
                    Please enter your requirements.
                </h3>

             {{--  date and time  --}}
                <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K' });" x-ref="datetimewidget"
                    class="flatpickr container mx-auto col-span-6 sm:col-span-6 mt-5">
                    <label for="datetime" class="flex-grow  block text-gray-700 font-bold mb-2">Date and
                        Time</label>
                    <div class="flex align-middle align-content-center">
                        <input x-ref="datetime" type="text" id="datetime" data-input placeholder="Select.."
                            class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                        <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r"
                            title="clear" data-clear>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20"
                                fill="#c53030">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

             {{--  form  --}}
                <form class="space-y-6" action="#">
                    {{--  online or offline  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="onoff"></label>
                        <input required type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="onoff"
                                value="online" checked>
                            <span class="ml-2 text-gray-700">Online</span>
                            <input required type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="onoff"
                                value="offline">
                            <span class="ml-2 text-gray-700">Offline</span>
                    </div>

                    {{--  location  --}}
                    <div>
                        <label for="location" class="block text-gray-700 font-bold mb-2">Location</label>
                        <input type="text" name="location" id="location"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Offline only" required>
                    </div>

                    {{--  subject slect form  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="subject">
                            Subject
                        </label>
                        <select required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="occupation" name="occupation">
                            <option value="" hidden>Select a subject</option>
                            <option value="english">English</option>
                            <option value="math">Math</option>
                            <option value="science">Science</option>
                            <option value="social studies">Social Studies</option>
                        </select>
                    </div>

                    {{--  gender of teacher  --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="gender">
                            Teacher
                        </label>
                        <input required type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                value="male" checked>
                            <span class="ml-2 text-gray-700">Male</span>
                            <input required type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                value="female">
                            <span class="ml-2 text-gray-700">Female</span>
                            <input required type="radio"
                                class="form-radio h-4 w-4 text-[#ED4C59] transition duration-150 ease-in-out" name="gender"
                                value="either">
                            <span class="ml-2 text-gray-700">Either</span>
                    </div>

                    {{--  search button  --}}
                    <div class="flex items-center justify-center mt-8">
                        <button type="submit"
                            class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md flex items-center">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--  links  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
