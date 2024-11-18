<x-layout-web title="Code Type | Home" description="CodeType is an innovative educational platform for learning programming and enhancing technical skills. Explore comprehensive courses, personalized learning paths, and study plans tailored to help you excel in modern programming fields." keywords="python,javascript,js,git,github,website,web,development,course,courses,html,css,react,redux,api,front,back,end,learn,tutorial,programming">
    @include('web.partials.header')

    <main>
        {{-- Hero Section --}}
        @include('web.home.sections.hero')


        {{-- Learning Paths Section --}}
        @include('web.home.sections.learning-paths')


        {{-- Study plans Section --}}
        @include('web.home.sections.study-plans')


        {{-- Features Section --}}
        @include('web.home.sections.features')


        {{-- Posts Section --}}
        {{-- @include('web.home.sections.posts') --}}


        <section class="relative py-12 overflow-hidden bg-gray-50 dark:bg-gray-900 sm:py-16 lg:py-20">
            <div class="absolute bottom-0 right-0"><span class="relative inline-block"><img src="https://landingfoliocom.imgix.net/store/collection/saasui/images/cta/4/ring-pattern.svg" alt="" class="w-full max-w-2xl -mb-16 sm:-mb-56 lg:mb-0"></span></div>
            <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="flex flex-col items-center text-center md:text-left md:flex-row md:items-start sm:max-w-md lg:max-w-2xl">
                        <p class="text-3xl sm:text-4xl lg:text-5xl shrink-0">👋</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl lg:text-5xl md:ml-4 lg:ml-8 md:mt-0">Ready to start your educational journey?</h2>
                    </div>
                    <div class="flex flex-col items-center mt-8 space-y-6 md:mt-0"><a target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-full shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700" role="button" href="https://app.chaibuilder.com/register">Create account</a>
                        <p class="text-sm font-normal">Get started quickly with the best learning platform</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('web.partials.footer')
</x-layout-web>
