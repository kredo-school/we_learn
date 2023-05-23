@extends('layouts.app')

@include('after_login_nav')

@section('contents')
    <script src="{{ asset('/js/comment.js') }}"></script>
    <div
        class="h-screen w-screen bg-[url('/assets/images/bg_exchange-modified.jpg')] bg-center bg-no-repeat flex flex-col items-center justify-center py-[500px]">
        <div class="bg-gray-100 w-[1200px] flex flex-col items-center justify-center rounded-lg">
            {{--  cotegory select form  --}}
            <div class="ml-10 flex flex-col items-center">
                <div class="text-xl font-bold mb-2 mt-10">The category is  <span class="text-5xl font-bold mx-3"> {{ $exchange->category }}</span></div>
            </div>

            {{--  chat  --}}
            <div
                class="relative flex items-center justify-center antialiased bg-white bg-gray-100 mt-10 mb-20 w-[800px]">
                <div class="container px-0 mx-auto sm:px-5">
                    <div
                        class="flex-col w-full py-4 mx-auto bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
                        {{--  viewed topic  --}}
                        <div class="flex flex-row">
                            {{--  user image  --}}
                            <img src="/assets/images/user-circle.png" alt="User-pic" class="w-12 h-12 object-contain" />
                            <div class="flex-col mt-1">
                                {{--  name and time history  --}}
                                <div class="flex items-center flex-1 px-4 font-bold leading-tight text-2xl">Noob master
                                    <span class="ml-2 text-xs font-normal text-gray-500">2 weeks ago</span>
                                </div>
                                {{--  message  --}}
                                <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                                    <p>I want to know about javascript.</p>
                                    <p>I can teach about php.</p>
                                </div>
                                {{--  respond button  --}}
                                <button onclick="show()" id="show-form-btn"
                                    class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                                    <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                        viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </button>
                                {{--  good button  --}}
                                <button class="inline-flex items-center px-1 -ml-1 flex-column">
                                    <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <hr class="my-2 ml-16 border-gray-200">
                        {{--  respond   --}}
                        <div class="flex flex-row pt-1 md-10 md:ml-16">
                            {{--  user image  --}}
                            <img src="/assets/images/user-circle.png" alt="User-pic" class="w-12 h-12 object-contain" />
                            <div class="flex-col mt-1">
                                {{--  user name and time history  --}}
                                <div class="flex items-center flex-1 px-4 font-bold leading-tight">Emily
                                    <span class="ml-2 text-xs font-normal text-gray-500">5 days ago</span>
                                </div>
                                {{--  message  --}}
                                <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                                    <p>I can teach you!</p>
                                    <p>Do you want to talk with zoom? or only message?</p>
                                </div>
                                {{--  respond button  --}}
                                <button onclick="show()" id="show-form-btn"
                                    class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                                    <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                        viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </button>
                                {{--  good button  --}}
                                <button class="inline-flex items-center px-1 -ml-1 flex-column">
                                    <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <hr class="my-2 ml-16 border-gray-200">

                        <div class="flex flex-row pt-1 md-10 md:ml-16">
                            <img src="/assets/images/user-circle.png" alt="User-pic" class="w-12 h-12 object-contain" />
                            <div class="flex-col mt-1">
                                <div class="flex items-center flex-1 px-4 font-bold leading-tight">Noob master
                                    <span class="ml-2 text-xs font-normal text-gray-500">5 days ago</span>
                                </div>
                                <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                                    <p>I want to talk with zoom!</p>
                                    <p>When are you available?</p>
                                </div>
                                <button onclick="show()" id="show-form-btn"
                                    class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                                    <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                        viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </button>
                                <button class="inline-flex items-center px-1 -ml-1 flex-column">
                                    <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  respond comment input form --}}
            <div id="comment-form" style="display: none;">
                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-white dark:bg-gray-700 w-[800px] mb-20">
                        <button type="button"
                            class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Upload image</span>
                        </button>
                        <button type="button"
                            class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Add emoji</span>
                        </button>
                        <textarea id="chat" rows="1"
                            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <button type="submit"
                            class="inline-flex justify-center p-2 text-white rounded-full cursor-pointer bg-[#F6A5B3] hover:bg-[#ED4C59] dark:text-[#ED4C59] dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
