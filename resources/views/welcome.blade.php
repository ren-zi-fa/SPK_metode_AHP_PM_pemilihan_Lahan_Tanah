<x-guest-layout>
    <section class="bg-center bg-no-repeat text-purple-500 bg-gray-500 dark:bg-dark-eval-0 dark:text-gray-200 bg-blend-multiply w-full"
        style="background-image: url('{{ asset('landingpage/giphy.gif') }}');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                SISTEM PENDUKUNG KEPUTUSAN METODE AHP DAN PROFILE MATCHING</h1>
                <div class="flex flex-col sm:flex-row sm:justify-center space-y-4 sm:space-y-0 mt-8">
                    @if (Route::has('login'))
    
                        @auth
                        <a href="{{route('home') }}"
                            class="font-semibold text-xl text-blue-600 dark:text-blue-500 hover:underline px-8 ">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-xl text-blue-600 dark:text-blue-500 hover:underline px-8 ">Log
                            in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="font-semibold text-xl text-blue-600 dark:text-blue-500 hover:underline px-8  ">Register</a>
                        @endif
                        @endauth
    
                    @endif
                </div>
    </section>
</x-guest-layout>
