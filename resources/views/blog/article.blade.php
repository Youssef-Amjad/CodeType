<x-layouts.master :title="$post->get('slug')" :description="$post->get('description')" keywords="python,javascript,js,git,github,website,web,development,course,courses,html,css,react,redux,api,front,back,end,learn,tutorial,programming">
    @include('web.partials.header')

    <main class="container max-w-screen-lg mt-8">
        <x-breadcrumb>
            <x-slot:middle :href="route('blog.index')">
                Blog
            </x-slot:middle>
            <a href="{{ $post->get('slug') }}" class="font-medium underline">{{ $post->get('slug') }}</a>
        </x-breadcrumb>

        <div class="flex px-4 pt-8 pb-10 lg:px-8">
            <a class="flex items-center font-semibold leading-6 text-gray-600 group hover:text-gray-900 dark:text-gray-200 dark:hover:text-white" href="{{ route('blog.index') }}">
                <div class="w-auto h-10 mr-2 overflow-visible text-gray-400 duration-200 group-hover:text-gray-600 dark:group-hover:text-gray-300 group-hover:mr-3">
                    <
                </div>
                <span>Go back</span>
            </a>
        </div>
        <article class="mx-auto">
            <header class="flex items-center text-gray-700 dark:text-gray-400">
                <dl>
                    <dt class="sr-only">Date</dt>
                    <dd>
                        {{-- <time datetime="{{ $post->presenter()->lastUpdated() }}">{{ $post->presenter()->lastUpdated() }}</time> --}}
                    </dd>
                </dl>
                <span class="mx-1 font-bold">•</span>
                <dl>
                    <dt class="sr-only">min Read</dt>
                    <dd>
                        <span>9 min Read</span>
                    </dd>
                </dl>
            </header>
            <x-section class="flex items-center px-5 my-6 space-x-1.5 font-medium whitespace-nowrap">
                <x-image :src="asset('images/avatars/youssef.jpg')" alt="" class="w-12 h-12 rounded-full" />
                <div class="text-sm leading-6">
                    <h1 class="text-gray-900 dark:text-gray-200">{{ $post->get('user')['name'] }}</h1>
                    <a href="https://twitter.com/ZYYOGi" class="text-sky-500 hover:text-sky-600 dark:text-sky-400">{{ $post->get('user')['email'] }}</a>
                </div>
            </x-section>
            {{-- <x-post.categories :categories="$post->get('categories')" /> --}}
            <br>
            <x-post.tags :tags="$post->get('tags')" />
            <x-prose>
                <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-200 md:text-3xl">
                    {{ $post->get('title') }}
                </h1>
                {{-- <x-post.tree.trunk :tree="$post->presenter()->tree()" /> --}}

                {!! Str::markdown(File::get(resource_path('markdown/benchmark.md'))) !!}
            </x-prose>
        </article>

        <x-post.share />

        <footer class="mx-auto mt-16">
            <div class="relative pb-28">
                <section class="relative py-16 border-t border-gray-200 dark:border-gray-200/5">
                    <h2 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Get all of our updates directly to your&nbsp;inbox.<br>Sign up for our newsletter.</h2>
                    <div class="max-w-md mt-5">
                        <form action="" method="post" class="flex flex-wrap">
                            <div class="px-2 grow-[9999] basis-64 mt-3">
                                <div class="relative group">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="absolute inset-y-0 w-6 h-full text-gray-400 pointer-events-none left-3 group-focus-within:text-sky-500 dark:group-focus-within:text-gray-400">
                                        <path d="M5 7.92C5 6.86 5.865 6 6.931 6h10.138C18.135 6 19 6.86 19 7.92v8.16c0 1.06-.865 1.92-1.931 1.92H6.931A1.926 1.926 0 0 1 5 16.08V7.92Z"></path>
                                        <path d="m6 7 6 5 6-5"></path>
                                    </svg>
                                    <input name="email_address" type="email" required autocomplete="email" aria-label="Email address" class="block w-full py-2 pl-12 pr-3 leading-5 text-gray-900 bg-white border border-transparent rounded-md shadow appearance-none ring-1 ring-gray-900/5 sm:text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-gray-700/20 dark:ring-gray-200/20 dark:focus:ring-sky-500 dark:text-white" placeholder="Subscribe via email">
                                </div>
                            </div>
                            <div class="flex px-2 mt-3 grow">
                                <button type="submit" class="flex-auto px-3 py-2 text-sm font-semibold text-white border-transparent rounded-md shadow bg-sky-500 border-y hover:bg-sky-600 dark:hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-300 dark:focus:ring-offset-gray-900 dark:focus:ring-sky-700">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </footer>
    </main>

    @include('web.partials.footer')
</x-layouts.layout-master>
