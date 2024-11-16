<x-layout-web title="About" description="About" keywords="python,javascript,js,git,github,website,web,development,course,courses,html,css,react,redux,api,front,back,end,learn,tutorial,programming">
    @include('web.partials.header')

    <section class="container flex flex-col justify-between gap-16 px-3 my-16 lg:flex-row md:gap-14 lg:my-20">
        <div class="w-full lg:w-6/12">
            <h2 class="text-3xl font-bold leading-7 text-gray-800 lg:text-4xl lg:leading-9 dark:text-white">Our Mission</h2>
            <p class="w-full mt-8 text-base font-normal leading-6 text-gray-600 lg:w-10/12 xl:w-9/12 dark:text-gray-200">for the website trips is to provide an exceptional online platform where users can explore and plan their dream vacations with ease. We strive to offer a comprehensive range of travel options, including flights, accommodations, and activities, all tailored to meet the unique preferences and budgets of our users.</p>
            <p class="w-full mt-10 text-base font-normal leading-6 text-gray-600 lg:w-10/12 xl:w-9/12 dark:text-gray-200">Our goal is to inspire and assist travelers in creating unforgettable experiences, whether they are seeking adventure, relaxation, or cultural immersion. With a user-friendly interface and reliable information, we aim to simplify the trip planning process and ensure that every journey is memo</p>
        </div>
        <div class="w-full lg:w-6/12">
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-1 lg:gap-12">
                {{-- {/* <!-- Team Card --> */} --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <svg class="dark:fill-white" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15C20.4853 15 22.5 12.9853 22.5 10.5C22.5 8.01472 20.4853 6 18 6C15.5147 6 13.5 8.01472 13.5 10.5C13.5 12.9853 15.5147 15 18 15Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M25.5 28.5C27.9853 28.5 30 26.4853 30 24C30 21.5147 27.9853 19.5 25.5 19.5C23.0147 19.5 21 21.5147 21 24C21 26.4853 23.0147 28.5 25.5 28.5Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M10.5 28.5C12.9853 28.5 15 26.4853 15 24C15 21.5147 12.9853 19.5 10.5 19.5C8.01472 19.5 6 21.5147 6 24C6 26.4853 8.01472 28.5 10.5 28.5Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">Team</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">We are a great team, our mission is to make you happy on the trip to Marsa Alam. be with us</p>
                    </div>
                </div>

                {{-- {/* <!-- Board Card --> */} --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <svg class='dark:fill-white' width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 10.5C12.1569 10.5 13.5 9.15685 13.5 7.5C13.5 5.84315 12.1569 4.5 10.5 4.5C8.84315 4.5 7.5 5.84315 7.5 7.5C7.5 9.15685 8.84315 10.5 10.5 10.5Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M7.5 33V25.5L6 24V18C6 17.6022 6.15804 17.2206 6.43934 16.9393C6.72064 16.658 7.10218 16.5 7.5 16.5H13.5C13.8978 16.5 14.2794 16.658 14.5607 16.9393C14.842 17.2206 15 17.6022 15 18V24L13.5 25.5V33" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M25.5 10.5C27.1569 10.5 28.5 9.15685 28.5 7.5C28.5 5.84315 27.1569 4.5 25.5 4.5C23.8431 4.5 22.5 5.84315 22.5 7.5C22.5 9.15685 23.8431 10.5 25.5 10.5Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M22.5 33V27H19.5L22.5 18C22.5 17.6022 22.658 17.2206 22.9393 16.9393C23.2206 16.658 23.6022 16.5 24 16.5H27C27.3978 16.5 27.7794 16.658 28.0607 16.9393C28.342 17.2206 28.5 17.6022 28.5 18L31.5 27H28.5V33" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">Board</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">In the beginning we show you what our journey will be like from start to finish so that you are ready for the adventure.</p>
                    </div>
                </div>

                {{-- {/* <!-- Press Card --> */} --}}
                <div class="flex p-4 rounded-lg shadow-lg dark:shadow-gray-900">
                    <div class="mr-6">
                        <svg class='dark:fill-white' width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.5 7.5H7.5C5.84315 7.5 4.5 8.84315 4.5 10.5V25.5C4.5 27.1569 5.84315 28.5 7.5 28.5H28.5C30.1569 28.5 31.5 27.1569 31.5 25.5V10.5C31.5 8.84315 30.1569 7.5 28.5 7.5Z" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M4.5 10.5L18 19.5L31.5 10.5" stroke="#1F2937" strokeWidth="2.75" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-xl font-semibold leading-5 text-gray-800 lg:text-2xl lg:leading-6 dark:text-white">Send-Mail</p>
                        <p class="mt-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">You can contact us by e-mail. We are quick to respond. You can inquire about anything.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('web.partials.footer')
</x-layout-web>
