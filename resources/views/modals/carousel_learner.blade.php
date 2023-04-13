<div class="fixed top-0 left-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none bg-[rgba(0,0,0,0.5)]"
    id="learnerCarousel" style="display: none">
    <div id="default-carousel" class="relative w-full h-full" data-carousel="static">
        {{--  carousel learner  --}}
        <div class="relative h-full overflow-hidden rounded-lg flex justify-center items-center">
            {{--  page 1  --}}
            <div class="hidden duration-700 ease-in-out flex items-center justify-center h-full w-full"  data-carousel-item>
                <div class="relative flex items-center bg-[rgba(255,255,255,1)] h-[672px] w-[1047.53px]">
                    {{--  close button  --}}
                    <button class="absolute top-0 right-0 m-5 hover:bg-gray-200" id="close-button" onclick="closeCarousel('learner')">
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
                         <div class="py-12">
                            <p class="text-2xl font-bold ">You can learn whenever you want.</p>
                            <p class="text-2xl font-bold my-8">You can choose teachers.</p>
                            <p class="text-2xl font-bold">Easy to reserve.</p>
                        </div>
                </div>
            </div>

            {{--  page 2  --}}
            <div class="hidden duration-700 ease-in-out flex items-center justify-center h-full w-full"  data-carousel-item>
                <div class="relative flex items-center justify-center bg-[rgba(255,255,255,1)] h-[672px] w-[1047.53px]">
                    {{--  close button  --}}
                    <button class="absolute top-0 right-0 m-5 hover:bg-gray-200" id="close-button" onclick="closeCarousel('learner')">
                        <img src="assets/images/close_button.png" alt="closebutton" class="h-[25px] w-[25px]">
                    </button>

                    {{--  image  --}}
                    <div class="py-12">
                        <div
                            class="h-[400px] w-[250px] bg-[url('/assets/images/reserve1.png')] bg-cover bg-center mx-20 rounded-lg mb-5">
                        </div>
                    </div>

                    {{--  good point   --}}
                    <div class="py-12">
                            <p class="text-2xl font-bold">You need 1 ticket for 1 hour lesson.</p>
                            <p class="text-2xl font-bold mt-8">Need credit card for payment.</p>
                            <p class="text-1xl font-bold text-red-500 ">If you are under 18 years old,</p>
                            <p class="text-1xl font-bold text-red-500 ">you need your parents permission.</p>
                            <p class="text-2xl font-bold mt-5">No expiration date for ticket.</p>
                        </div>
                </div>
            </div>

            {{--  page 3  --}}
            <div class="hidden duration-700 ease-in-out flex items-center justify-center h-full w-full"  data-carousel-item>
                <div class="relative flex items-center justify-center bg-[rgba(255,255,255,1)]">
                    {{--  close button  --}}
                    <button class="absolute top-0 right-0 m-5 hover:bg-gray-200" id="close-button" onclick="closeCarousel('learner')">
                        <img src="assets/images/close_button.png" alt="closebutton" class="h-[25px] w-[25px]">
                    </button>



                    <div class="flex content-center">
                        <div class="py-3 ml-10">
                            {{--  1  --}}
                            <p class="text-2xl text-center">You need 1 ticket for 1 hour lesson.</p>
                            <div class="flex items-center">
                                <div class="py-4 font-black text-5xl">1</div>
                                <div
                                    class="py-12 h-[250px] w-[350px] bg-[url('/assets/images/reserve1.png')] bg-cover bg-center mx-20 rounded-lg">
                                </div>
                            </div>


                            {{--  3  --}}
                            <div class="flex items-center">
                                <div class="py-4 font-black text-5xl">3</div>
                                <div
                                    class=" py-12 h-[250px] w-[350px] bg-[url('/assets/images/reserve3.png')] bg-cover bg-center mx-20 rounded-lg mt-3">
                                </div>
                            </div>
                            <p class="mt-10 text-2xl text-center">If the teacher accept your request,</p>
                            <p class="text-2xl text-center">you got your reservation for lesson.</p>
                        </div>


                        <div class="py-3 mr-10">
                            {{--  2  --}}
                            <p class="text-2xl text-center">Then you can select any teacher.</p>
                            <div class="flex items-center">
                                <div class="py-4 font-black text-5xl">2</div>
                                <div
                                    class="py-12 h-[220px] w-[300px] bg-[url('/assets/images/reserve2.png')] bg-cover bg-center mx-20 rounded-lg mt-5 mr-5">
                                </div>
                            </div>

                            {{--  4  --}}
                            <div class="flex items-center">
                                <div class="py-4 font-black text-5xl">4</div>
                                <div
                                    class="py-12 h-[300px] w-[200px] bg-[url('/assets/images/teacher_profile.png')] bg-cover bg-center mx-20 rounded-lg mt-3">
                                </div>
                            </div>
                            <p class="py-4 text-2xl text-center">You can see profile of teachers.</p>
                        </div>
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
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
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
