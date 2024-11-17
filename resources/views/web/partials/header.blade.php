<header class="relative shadow-md" x-data="{}">
    <nav class="navigation">
        <a class="flex items-center justify-center space-x-1.5" href="{{ route('home') }}">
            {{-- <x-image :src="asset('logo.png')" alt="logo" width="50" height="50" class="rounded-full dark:bg-white" data-aos="fade-down" data-aos-delay="250" /> --}}
            <h1 class="text-xl font-bold">Code Type</h1>
        </a>
        <ul class='nav-links' x-ref="menu">
            <li><a class='nav-link active' href="{{ route('home') }}">Home</a></li>


            <li class="relative nav-link group">
                <button class="flex items-center">Learn now
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="ml-1.5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"></path>
                    </svg>
                </button>
                <ul role="menu" class="sub-nav-links">
                    <li><a class='nav-link' href="#">Articles</a></li>
                    <li><a class='nav-link' href="#">Educational Courses</a></li>
                    <li><a class='nav-link' href="#">Course Assignments</a></li>
                    <li><a class='nav-link' href="#">Examples, Applications</a></li>
                    <li><a class='nav-link' href="#">Software challenges</a></li>
                    <li><a class='nav-link' href="#">Developer tools</a></li>
                    <li><a class='nav-link' href="#">Problem solving</a></li>
                </ul>
            </li>


            <li class="relative nav-link group">
                <button class="flex items-center">Learning paths
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="ml-1.5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"></path>
                    </svg>
                </button>
                <ul role="menu" class="sub-nav-links">
                    <li><a class='nav-link' href="#">Fundamentals Course</a></li>
                    <li><a class='nav-link' href="#">Front-End Developer track</a></li>
                    <li><a class='nav-link' href="#">Back-End Developer track</a></li>
                    <li><a class='nav-link' href="#">Cyber Security track</a></li>
                    <li><a class='nav-link' href="#">DevOps Developer track</a></li>
                </ul>
            </li>


            <li class="relative nav-link group">
                <button class="flex items-center">Study plans
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="ml-1.5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"></path>
                    </svg>
                </button>
                <ul role="menu" class="sub-nav-links">
                    <li><a class="nav-link" href="#">C++ Study Plan</a></li>
                    <li><a class="nav-link" href="#">HTML study plan</a></li>
                    <li><a class="nav-link" href="#">CSS study plan</a></li>
                    <li><a class="nav-link" href="#">JavaScript study plan</a></li>
                    <li><a class="nav-link" href="#">Python study plan</a></li>
                    <li><a class="nav-link" href="#">PHP study plan</a></li>
                </ul>
            </li>

            <li><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>

            <li><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
            <li>
                <button class="btn-search" x-on:click="$dispatch('open-modal', { id: 'edit-user' })">
                    <span class="sr-only">Search</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </button>
            </li>

        </ul>

        @auth
            <div class="relative" x-data="{ open: false }">
                <button class="flex items-center justify-center" @click="open = !open" aria-expanded="false">
                    <x-image :src="asset('images/avatars/youssef.jpg')" class="object-cover rounded-full shadow-lg size-12" alt="user avatar" />
                </button>
                <div x-show="open" class="absolute z-10 w-[230px] mt-3 right-0 sm:px-0 shadow-lg" style="display: none;" x-transition>
                    <div class="relative grid grid-cols-1 gap-6 px-6 bg-white dark:bg-body-dark py-7 rounded-3xl">
                        <div class="flex items-center space-x-3">
                            <div class="relative inline-flex items-center justify-center overflow-hidden font-semibold uppercase rounded-full shadow-inner size-12 wil-avatar text-neutral-100 ring-1 ring-white dark:ring-neutral-900">
                                <x-image :src="auth()->user()->getAvatar()" :alt="auth()->user()->name" class="absolute object-cover w-full h-full" />
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-semibold font-xs">{{ auth()->user()->name }}</h4>
                                <p class="text-xs mt-0.5">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                        <a href="/" class="flex items-center p-3 -my-5 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700">
                            Account
                        </a>
                        <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                        <button @click="localStorage.getItem('theme') === 'light' ? (document.documentElement.className = 'dark', localStorage.setItem('theme', 'dark')) : (document.documentElement.className = 'light', localStorage.setItem('theme', 'light'))" class="flex items-center justify-between p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                            <div class="flex items-center">
                                <span class="sr-only">Enable dark mode</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Theme Dark / Light</p>
                                </div>
                            </div>
                        </button>
                        <a href="{{ route('auth.logout') }}" class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="">
                <a href="{{ route('auth.login') }}" class="inline-block px-8 py-2 font-bold duration-300 border-2 border-indigo-500 rounded-lg hover:bg-white hover:text-indigo-800">
                    Auth
                </a>
            </div>
        @endauth
        <div class="flex items-center lg:hidden">
            <button class="hidden max-md:block" @click="$refs.menu.classList.toggle('!flex')" role="switch" aria-label='switch menu' aria-checked='mixed'>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>
