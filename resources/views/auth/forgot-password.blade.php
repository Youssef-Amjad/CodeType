<x-layout-auth title="Forgot Password" description="Forgot password description" keywords="Forgot password keywords">
    @include('web.partials.header')
    <main class="max-lg:py-32">
        <div class="flex flex-col items-center justify-center px-3 py-8 mx-auto md:h-screen lg:py-0">
            <a class="relative mb-6" title="CodeType" href="{{ route('home') }}">
                <h1 class="ml-2 text-lg font-bold md:text-3xl dark:text-white" title="{{ config('app.name') }}">{{ config('app.name') }}</h1>
            </a>
            <div class="w-full rounded-lg shadow bg-white/50 dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 backdrop-blur-3xl">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Forgot Password
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('auth.reset-password') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('email') }}" placeholder="example@email.com" required autocomplete="email">
                            <span class="text-red-500 pt-1.5 pl-1.5 inline-block">{{ $errors->first('email') }}</span>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Reset Code</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('web.partials.footer')
</x-layout-auth>
