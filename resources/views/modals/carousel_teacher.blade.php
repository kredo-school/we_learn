<div class="fixed top-0 left-0 z-[1055] h-full w-full overflow-hidden outline-none bg-[rgba(0,0,0,0.5)]"
    id="teacherCarousel" style="display: none">
    <div id="default-carousel" class="relative w-full h-full" data-carousel="static">
        {{--  carousel teacher  --}}
        <div class="relative h-full overflow-hidden rounded-lg flex justify-center items-center">
            {{--  page 1  --}}
            <div class="hidden duration-700 ease-in-out flex items-center justify-center h-full w-full" id="teacher1" data-carousel-item>
                <div class="relative flex items-center bg-[rgba(255,255,255,1)]">
                    {{--  close button  --}}
                    <button class="absolute top-0 right-0 m-5 hover:bg-gray-200" id="close-button" onclick="closeCarousel('teacher')">
                        <img src="assets/images/close_button.png" alt="closebutton" class="h-[25px] w-[25px]">
                    </button>
                    {{--  images  --}}
                    <div class="py-12">
                        <div
                            class="h-[250px] w-[350px] bg-[url('/assets/images/teacher_hi.jpg')] bg-cover bg-center mx-20 rounded-lg mb-5">
                        </div>
                        <div
                            class="h-[250px] w-[350px] bg-[url('/assets/images/learner_hi.jpg')] bg-cover bg-center mx-20 rounded-lg my-auto">
                        </div>
                    </div>
                    {{--  good points  --}}
                    <div class="py-12 px-20">
                        <p class="text-2xl font-bold ">You can earn and teach</p>
                        <p class="text-2xl font-bold my-8">when you have</p>
                        <p class="text-2xl font-bold">free time.</p>
                    </div>
                </div>
            </div>

            {{--  page 2  --}}
            <div class="hidden duration-700 ease-in-out flex items-center justify-center h-full w-full" id="teacher2" data-carousel-item>
                <div class="relative flex items-center justify-center bg-[rgba(255,255,255,1)] h-[616px] w-[930.48px]">
                    {{--  close button  --}}
                    <button class="absolute top-0 right-0 m-5 hover:bg-gray-200" id="close-button" onclick="closeCarousel('teacher')">
                        <img src="assets/images/close_button.png" alt="closebutton" class="h-[25px] w-[25px]">
                    </button>

                    {{--  image  --}}
                    <div class="py-12">
                        <div
                            class="h-[400px] w-[250px] bg-[url('/assets/images/teacher_profile.png')] bg-cover bg-center mx-20 rounded-lg mb-5">
                        </div>
                    </div>

                    {{--  good point & link button  --}}
                    <div class="py-12 px-20">
                        <p class="text-2xl font-bold mb-10">Let’’s be a teacher!!</p>
                        <a href="{{ route('teachers_register') }}" class="bg-[#F6A5B3] hover:bg-[#ED4C59] text-white font-bold py-2 px-4 rounded">
                            Create Your Account
                        </a>
                    </div>
                </div>
            </div>
        </div>

        Slider indicators
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
