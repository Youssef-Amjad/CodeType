<x-layout-blog title="Blog | Code Type" description="Blog" keywords="blog,articles,posts">
    @include('web.partials.header')


    <main class="max-w-[52rem] mx-auto px-4 pb-28 sm:px-6 md:px-8 xl:px-12 lg:max-w-6xl">
        <header class="py-16 sm:text-center">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight sm:text-4xl text-slate-900 dark:text-slate-200">Blog</h1>
            <span class="text-lg text-slate-700 dark:text-slate-400">All the latest "Code Type"</span>
            <section class="max-w-md mt-3 sm:mx-auto sm:px-4">
                <h2 class="sr-only">Sign up for our newsletter</h2>
                <form action="" class="flex">
                    <input name="q" type="search" aria-label="Search for every post.." class="block w-full px-3 py-2 leading-5 bg-white border border-transparent rounded-md shadow sm:text-sm placeholder:text-slate-400 text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-slate-700/20 dark:ring-slate-200/20 dark:focus:ring-sky-500 dark:text-white" placeholder="Search for Posts">
                    <button type="submit" class="px-3 py-2 text-sm font-semibold text-white border-transparent rounded-md shadow bg-sky-500 border-y hover:bg-sky-600 dark:hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-300 dark:focus:ring-offset-slate-900 dark:focus:ring-sky-700">Search</button>
                </form>
            </section>
        </header>
        <div class="relative sm:pb-12 sm:ml-[calc(2rem+1px)] md:ml-[calc(3.5rem+1px)] lg:ml-[max(calc(14.5rem+1px),calc(100%-48rem))]">
            <div class="hidden absolute top-3 bottom-0 right-full mr-7 md:mr-[3.25rem] w-px bg-slate-300 dark:bg-slate-800 sm:block"></div>
            <div class="space-y-16">

                @foreach ($posts as $post)
                    <article class="relative group">
                        <div class="absolute -inset-y-2.5 -inset-x-4 md:-inset-y-4 md:-inset-x-6 sm:rounded-2xl group-hover:bg-slate-50/70 dark:group-hover:bg-slate-800/50"></div>
                        <svg viewBox="0 0 9 9" class="hidden absolute right-full mr-6 top-2 text-slate-200 dark:text-slate-600 md:mr-12 w-[calc(0.5rem+1px)] h-[calc(0.5rem+1px)] overflow-visible sm:block">
                            <circle cx="4.5" cy="4.5" r="4.5" stroke="currentColor" class="fill-white dark:fill-slate-900" stroke-width="2"></circle>
                        </svg>
                        <div class="relative">
                            <x-post.categories :categories="$post->categories" />
                            <x-image src="/placeholder.png" :alt="$post->title" loading="lazy" class="object-cover my-4 rounded" />
                            <h3 class="pt-8 text-base font-semibold tracking-tight text-slate-900 dark:text-slate-100 lg:pt-0">{{ $post->title }}</h3>
                            <x-prose class="mt-2 mb-4 prose prose-slate prose-a:relative prose-a:z-10 line-clamp-2 dark:prose-dark">
                                {!! $post->presenter()->teaser() !!}
                            </x-prose>
                            <dl class="flex items-center text-gray-700 dark:text-gray-400 whitespace-nowrap">
                                <dl>
                                    <dt class="sr-only">Date</dt>
                                    <dd>
                                        <time datetime="{{ $post->presenter()->lastUpdated() }}">{{ $post->presenter()->lastUpdated() }}</time>
                                    </dd>
                                </dl>
                                <span class="mx-1 font-bold">•</span>
                                <dl>
                                    <dt class="sr-only">min Read</dt>
                                    <dd>
                                        <span>{{ fake()->numberBetween(2, 16) }} min Read</span>
                                    </dd>
                                </dl>
                            </dl>
                        </div>
                        <a class="flex items-center text-sm font-medium text-sky-500" href="{{ route('blog.article', $post->slug) }}">
                            <span class="absolute -inset-y-2.5 -inset-x-4 md:-inset-y-4 md:-inset-x-6 sm:rounded-2xl"></span>
                            <span class="relative">Read more
                                <span class="sr-only">, How to start programming</span>
                            </span>
                            <svg class="relative mt-px overflow-visible ml-2.5 text-sky-300 dark:text-sky-700" width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0L3 3L0 6"></path>
                            </svg>
                        </a>
                    </article>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    </main>

    @include('web.partials.footer')
</x-layout-blog>
