@extends('layouts.app')

@include('after_login_nav')

@section('contents')

<div class="px-6 py-6 lg:px-8">
    {{--  text  --}}
       <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white flex justify-center">
           Edit available day and time
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

           {{--  search  --}}
           <div class="flex items-center justify-center mt-8">
               <button type="submit"
                   class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded-md flex items-center">
                   Edit
                   <img src="../assets/images/click.png" alt="point" class="h-5 w-5 ml-2">
               </button>
           </div>
       </form>
   </div>

@endsection

{{--  links  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
