<x-layout-web title="About" description="About" keywords="python,javascript,js,git,github,website,web,development,course,courses,html,css,react,redux,api,front,back,end,learn,tutorial,programming">
    @include('web.partials.header')

    <section class="container flex flex-col items-center justify-between gap-16 px-3 my-16 lg:flex-row md:gap-14 lg:my-20">
        <div class="w-full lg:w-6/12">
            <h2 class="text-3xl font-bold leading-7 text-gray-800 lg:text-4xl lg:leading-9 dark:text-white">Our Mission</h2>
            <p class="w-full mt-8 text-base font-normal leading-6 text-gray-600 lg:w-10/12 xl:w-9/12 dark:text-gray-200">At CodeType, our mission is to revolutionize the way people learn programming and build technical skills. We aim to bridge the gap between aspiring coders and the tech industry by providing high-quality, accessible, and interactive education.</p>
            <p class="w-full mt-10 text-base font-normal leading-6 text-gray-600 lg:w-10/12 xl:w-9/12 dark:text-gray-200">We’re committed to being more than just a learning platform. CodeType is a community where learners collaborate, inspire, and grow together on their journey to mastering programming and beyond.</p>
        </div>
        <div class="w-full lg:w-6/12">
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-1 lg:gap-12">
                {{--  Team Card --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <i class="fa fa-user fa-xl"></i>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">Team</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">
                            At CodeType, it's just me — Youssef Amjad. I'm a passionate developer and educator dedicated to shaping the future of programming education.
                        </p>
                    </div>
                </div>

                {{-- The idea Card --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <i class="fa fa-lightbulb fa-xl"></i>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">The idea</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">
                            CodeType was born from a simple yet powerful idea: to make programming education accessible, engaging, and effective for everyone.
                        </p>
                    </div>
                </div>

                {{-- Our Vision Card --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <i class="fa fa-eye fa-xl"></i>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">Our Vision</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">
                            We envision a world where anyone, regardless of their background or experience level, can learn to code and turn their ideas into reality. CodeType is here to inspire and empower the next generation of developers, creators, and innovators.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('web.partials.footer')
</x-layout-web>
