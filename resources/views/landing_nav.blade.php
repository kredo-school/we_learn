<nav class="flex items-center justify-between flex-wrap bg-white">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ url('/') }}">
            <img src="assets/images/logo.png" alt="Logo" class="h-[60px] w-[60px] ml-3">
        </a>
    </div>
    <div class="flex items-center">
        <div class="relative relative-hover">
            <button class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                Login
            </button>
            <div class="absolute z-10 hidden bg-white rounded-lg shadow-md">
                <a href="/{{ route('learner.login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Learner
                </a>
                <a href="/{{ route('teacher.login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Teacher
                </a>
                <a href="/{{ route('exchange.login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Exchange
                </a>
            </div>
        </div>
        <div class="relative relative-hover">
            <button class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
                Register
            </button>
            <div class="absolute z-10 hidden bg-white rounded-lg shadow-md">
                <a href="/{{ route('learner.register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Learner
                </a>
                <a href="/{{ route('teacher.register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Teacher
                </a>
                <a href="/{{ route('exchange.register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                    Exchange
                </a>
            </div>
        </div>
        <a href="/{{ route('contact_us') }}" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2 mr-6">
            Contact us
        </a>
    </div>

    <div class="md:hidden">
        <button type="button" class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200"
            aria-label="Toggle menu">
            <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current">
                <path
                    d="M3 4h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 9h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 14h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z">
                </path>
            </svg>
        </button>
    </div>
</nav>
