<x-layout-web title="Privacy Policy" description="Privacy Policy" keywords="python,javascript,js,git,github,website,web,development,course,courses,html,css,react,redux,api,front,back,end,learn,tutorial,programming">
    @include('web.partials.header')

    <div class="container max-w-screen-md">
        <div class="px-4 sm:px-8 py-20 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl dark:text-white">Privacy policy</h1>
            <p class="mt-4 text-base leading-7 text-slate-600 dark:text-slate-300">Last updated on November 2, 2021</p>
        </div>
        <x-prose class="md:my-12">
            {!! Str::markdown(file_get_contents(resource_path('markdown/privacy.md'))) !!}
        </x-prose>
    </div>


    @include('web.partials.footer')
</x-layout-web>
