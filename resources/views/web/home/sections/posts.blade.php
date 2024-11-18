<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<x-section name="posts" class="container relative ">
    <div class="absolute inset-0 flex flex-col py-32 pl-10">
        <span class="bg-[#ef233c] rounded-full mix-blend-multiply filter blur-3xl opacity-10 h-40 w-96"></span>
        <span class="bg-[#04868b] rounded-full mix-blend-multiply filter blur-3xl opacity-30 h-40 w-96"></span>
    </div>
    <div id="slide-hero">
        <div class="swiper-wrapper">
            @foreach ([1, 2, 3, 4, 5] as $trip)
                <div class="relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24 swiper-slide">
                    <div class="relative flex flex-col-reverse justify-end md:flex-row">
                        <div class="z-10 w-full px-3 -mt-6 md:absolute md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 md:mt-12 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                            <div class="p-4 space-y-3 bg-white shadow-lg sm:p-8 xl:py-14 md:px-10 bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl sm:space-y-5">
                                <div class="flex flex-wrap space-x-2">
                                    <h3 class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                                    @foreach (explode(',', 'tag1,tags2') as $keyword)
                                        <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                                    @endforeach
                                </div>
                                <a class="block font-serif font-bold text-gray-800 underline underline-offset-4" title="category" href="">Youssef Amjad</a>
                                <h2 class="text-2xl font-semibold md:text-3xl line-clamp-1">
                                    Youssef Amjad
                                </h2>
                                <p class="mt-2 text-sm font-normal md:mt-3 sm:text-base text-neutral-500 dark:text-neutral-400 line-clamp-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio perferendis aspernatur fuga quibusdam, in nemo esse molestias cumque dolores aliquid temporibus magnam voluptates quae, rerum consequatur at ullam dolore exercitationem!
                                </p>
                                <div class="flex justify-between pt-5">
                                    <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                        <dt class="sr-only">Date</dt>
                                        <dd class="font-normal text-neutral-500 dark:text-neutral-400">
                                            <time datetime=""></time>
                                        </dd>
                                    </dl>
                                    <a class="block px-5 py-3 transition-all bg-white border-2 border-sky-400 rounded-3xl hover:shadow-xl hover:bg-opacity-50" href="">Show More..</a>
                                </div>
                            </div>
                            <div class="p-4 sm:pt-8 sm:px-10">
                                <div class="relative flex items-center text-neutral-900 dark:text-neutral-300">
                                    <button class="slide-post-prev w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Prev">
                                        < </button>
                                            <button class="flex items-center justify-center text-xl bg-white border rounded-full slide-post-next w-11 h-11 dark:bg-neutral-900 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none" title="Next">
                                                >
                                            </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-4/5 lg:w-2/3">
                            <div class="relative z-0 block w-full overflow-hidden group aspect-w-16 aspect-h-16 sm:aspect-h-9">
                                <div class="w-full h-full grid grid-cols-3 gap-0.5">
                                    <div class="grid">
                                        <x-image :src="'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-2xl" alt="Youssef Amjad" />
                                    </div>
                                    <div class="grid grid-rows-2 gap-0.5">
                                        <x-image :src="'default-placeholder.png'" class="object-cover object-center w-full h-full rounded" alt="Youssef Amjad" />
                                        <x-image :src="'default-placeholder.png'" class="object-cover object-center w-full h-full rounded" alt="Youssef Amjad" />
                                    </div>
                                    <div class="grid">
                                        <x-image :src="'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-2xl" alt="Youssef Amjad" />
                                    </div>
                                </div>
                                <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/20 group-hover:opacity-100" href=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-section>

<script>
    const swiper = new Swiper('#slide-hero', {
        slidesPerView: 1,
        lazy: true,
        loop: true,
        autoplayDisableOnInteraction: true,
        speed: 300,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        navigation: {
            nextEl: ".slide-post-next",
            prevEl: ".slide-post-prev",
        },
    });
</script>
