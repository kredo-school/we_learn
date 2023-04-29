@extends('layouts.app')

@include('registration_nav')

{{-- search bar --}}
<div class="w-screen flex justify-center items-center mt-8">
    <form class="flex items-center w-[700px]">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#ED4C59] focus:border-[#ED4C59] block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#ED4C59] dark:focus:border-[#ED4C59]"
                placeholder="Search" required>
        </div>
        <button type="submit"
            class="p-2.5 ml-2 text-sm font-medium text-white bg-[#ED4C59] rounded-lg border border-[#ED4C59] hover:bg-[#ED4C59] focus:ring-4 focus:outline-none focus:ring-[#ED4C59] dark:bg-[#ED4C59] dark:hover:bg-[#F6A5B3] dark:focus:ring-[#ED4C59]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
</div>



<body class="h-screen">
    <main class="p-5 bg-light-[#ED4C59]">
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h2 class="text-xl font-semibold text-vnet-[#ED4C59] mb-2 text-center">FAQ</h2>
                <ul class="flex flex-col">
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Is this app for free?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()"
                            class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="p-3 text-gray-900">Basically you can use this for free.
                                If you’re  learner, you have to buy ticket.
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>How do I track my order?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>What’s your return policy?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>How do I make changes to an existing order?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                Changes to an existing order can be made as long as the order is still in “processing”
                                status. Please contact our team via email and we’ll make sure to apply the needed
                                changes. If your order has already been shipped, we cannot apply any changes to it. If
                                you are unhappy with your order when it arrives, please contact us for any changes you
                                may require.
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>What shipping options do you have?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                For USA domestic orders we offer FedEx and USPS shipping.
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>What payment methods do you accept?</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#ED4C59] h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-[#ED4C59] overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                Any method of payments acceptable by you. For example: We accept MasterCard, Visa,
                                American Express, PayPal, JCB Discover, Gift Cards, etc.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>

</html>
