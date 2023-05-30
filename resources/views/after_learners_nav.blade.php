<nav class="flex items-center justify-between flex-wrap bg-white">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ url('/') }}">
            <img src="/assets/images/logo.png" alt="Logo" class="h-[60px] w-[60px] ml-3">
        </a>
    </div>
    <div class="flex items-center">
      {{-- Home button--}}
      <a href="{{ route('learner.home') }}" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2 mr-2 md:mr-6">
        <img src="/assets/images/round-home.png" alt="round-home"  class="h-8 w-8">
      </a>
      {{-- Calender --}}
      <a href="{{ route('learner.schedule_learner')}}" class="text-sm text-black hover:text-[#ED4C59] px-4 py-2 mr-2 md:mr-6">
        <img src="/assets/images/Calendar.png" alt="Calender" class="h-7 w-7">
      </a>

      {{-- login user name & profile,logout --}}
      <div class="relative relative-hover">
        <div class="flex items-center">
            <button class="text-sm text-black hover:text-[#ED4C59] px-4 py-2">
              <img src="{{ ($learner->profile_img != null) ? $learner->profile_img : url('/assets/images/insert-photo.jpg') }}" alt="User-pic" class="w-7 h-7 object-cover rounded-full" />
            </button>
            <span class="text-sm text-black mr-6 hover:text-[#ED4C59] px-4 py-2">Hello! {{ $learner->name }}</span>
          </div>

        <div class="absolute z-10 hidden bg-white rounded-lg shadow-md">
          <a href="{{ route('learner.show.profile',['id' => $learner->id])}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 flex items-center">
            <img src="{{ ($learner->profile_img != null) ? $learner->profile_img : url('/assets/images/insert-photo.jpg') }}" alt="User-pic" class="w-4 h-4 object-cover rounded-full mr-2" />
            <span class="text-sm text-black">Profile</span>
          </a>
          <form method="POST" action="{{ route('learner.logout') }}">
            @csrf
            <button type="submit" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 flex items-center">
                <img src="/assets/images/logout.png" alt="logout" class="w-4 h-4 object-contain mr-2" />
                <span class="text-sm text-black">Logout</span>
            </button>
        </form>
        </div>
      </div>


      <div class="md:hidden">
        <button type="button" class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200" aria-label="Toggle menu">
          <svg viewBox="0 0 20 20" class="h-6 w-6 fill-current">
            <path d="M3 4h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 9h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2zM3 14h14a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>
