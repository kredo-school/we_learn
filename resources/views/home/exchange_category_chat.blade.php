@extends('layouts.app')

@section('contents')
    @include('after_login_nav')
    <script src="{{ asset('/js/comment.js') }}"></script>
    <div
        class="h-screen w-screen bg-[url('/assets/images/bg_exchange-modified.jpg')] bg-center bg-no-repeat flex flex-col items-center justify-center py-[500px]">
        <div class="bg-gray-100 w-[1200px] flex flex-col items-center justify-center rounded-lg">
            {{--  cotegory select form  --}}
            <div class="ml-10 flex flex-col items-center">
                <div class="text-xl font-bold mb-2 mt-10">The category is <span class="text-5xl font-bold mx-3">
                        {{ $exchangeSkill->exchange->category }}</span></div>
            </div>

            {{--  chat  --}}
            <div class="relative flex items-center justify-center antialiased bg-white bg-gray-100 mt-10 mb-20 w-[800px]">
                <div class="container px-0 mx-auto sm:px-5">
                    <div
                        class="flex-col w-full py-4 mx-auto bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
                        {{--  viewed topic  --}}

                            <div class="flex flex-row">
                            {{--  user image  --}}
                                <img src="{{ $exchange->profile_img != null ? $exchange->profile_img : url('/assets/images/insert-photo.jpg') }}" alt="User-pic" class="w-10 h-10 rounded-full" />
                                <div class="flex-col mt-1">
                                    {{--  name and time history  --}}
                                    <div class="flex items-center flex-1 px-4 font-bold leading-tight text-2xl">
                                        {{ $exchangeSkill->exchange->name }}
                                        <span
                                            class="ml-2 text-xs font-normal text-gray-500">{{ $exchangeSkill->created_at->diffForHumans() }}</span>
                                    </div>
                                    {{--  message  --}}
                                    <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                                        <p>{{ $exchangeSkill->learn }}</p>
                                        <p>{{ $exchangeSkill->teach }}</p>
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
                                    {{-- heart button + no.of likes + categories --}}
                                    <form method="post" class="inline" action="{{ route('exchange.react.skill', ['exchange' => $exchange->id, 'exchange_skill' => $exchangeSkill->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm shadow-none p-0">
                                            @if($exchangeSkill->reactedBy($exchange->id))
                                            <i class="fa-solid fa-heart text-red-500"></i>
                                            @else
                                            <i class="fa-regular fa-heart"></i>
                                            @endif
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <hr class="my-2 ml-16 border-gray-200">
                        {{--  respond   --}}
                        @foreach ($exchangeSkill->comments as $comment)
                        <div class="flex flex-row pt-1 md-10 md:ml-16">
                            {{--  user image  --}}
                            <img src="{{ $comment->exchange->profile_img != null ? $comment->exchange->profile_img : url('/assets/images/insert-photo.jpg') }}"
                                alt="User-pic" class="w-10 h-10 rounded-full" />
                            <div class="flex-col mt-1">
                                {{--  user name and time history  --}}

                                <div class="flex items-center flex-1 px-4 font-bold leading-tight">{{ $comment->exchange->name }}
                                    {{--  @if ($comment->comment)  --}}
                                        <span class="ml-2 text-xs font-normal text-gray-500">
                                            {{ optional($comment->created_at)->diffForHumans() }}
                                        </span>
                                    {{--  @endif  --}}
                                </div>
                                {{--  message  --}}

                                    <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                                        <p>{{ $comment->comment }}</p>
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
                                {{-- heart button + no.of likes + categories --}}

                                <form method="post" class="inline" action="{{ route('exchange.react.comment', ['exchange' => $exchange->id, 'comment' => $comment->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm shadow-none p-0">
                                        @if($comment->reactedBy($exchange->id))
                                        <i class="fa-solid fa-heart text-red-500"></i>
                                        @else
                                        <i class="fa-regular fa-heart"></i>
                                        @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                        <hr class="my-2 ml-16 border-gray-200">
                        @endforeach

                    </div>
                </div>
            </div>

            {{--  respond comment input form --}}
            <div id="comment-form" style="display: none;">
                <form action="{{ route('exchange.comment.save', ['exchange' => $exchangeSkill->exchange->id, 'exchange_skill' => $exchangeSkill->id]) }}" method="post">
                    @csrf
                    <label for="chat" class="sr-only">Your comment</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-white dark:bg-gray-700 w-[800px] mb-20">
                        <button type="button
                            class="inline-flex justify-center p-2 text-gray-500
                            rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400
                            dark:hover:text-white dark:hover:bg-gray-600">
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
                        <textarea id="chat" rows="1" name="comment"
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
