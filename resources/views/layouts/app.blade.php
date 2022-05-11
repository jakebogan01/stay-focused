<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-full"
        x-data="{ navClosed: false, openModal: false }">
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true"
                 x-show.transition="navClosed">
                <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"
                     x-show.transition="navClosed"
                    x-cloak></div>

                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-[#242235]"
                x-show.transition="navClosed"
                x-cloak>
                    <!--
                      Close button, show/hide based on off-canvas menu state.

                      Entering: "ease-in-out duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "ease-in-out duration-300"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        @click="navClosed = false">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-shrink-0 flex items-center px-4">
                        <a href="{{ route('home') }}" class="flex items-end group">
                            <img class="h-8 w-auto group-hover:opacity-75 cursor-pointer transition-all" src="/img/logo-home-page.svg" alt="Stay Focused Logo">
                            <span class="ml-2 whitespace-nowrap text-white font-bold group-hover:opacity-75 text-2xl">
                                Stay Focused
                            </span>
                        </a>
                    </div>
                    <nav class="mt-5 flex-1 flex flex-col overflow-y-auto" aria-label="Sidebar">
                        <div class="px-2 space-y-1">
                            <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
                            <button type="button" class="mb-8 w-full bg-cyan-500 hover:bg-cyan-400 text-white group flex items-center px-2 py-4 text-sm leading-6 font-medium rounded-md" aria-current="page" x-on:click="openModal = true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-grow h-16 w-16 text-cyan-200" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <a href="{{ route('dashboard') }}" class="bg-cyan-800 hover:bg-cyan-800 text-white group flex items-center px-2 py-2 text-sm leading-6 font-bold rounded-md" aria-current="page">
                                <!-- Heroicon name: outline/home -->
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                {{ __('Home') }}
                            </a>

                            <a href="{{ route('focus') }}" class="text-cyan-100 hover:text-white hover:bg-cyan-800 group flex items-center px-2 py-2 text-base font-bold rounded-md {{ (request()->is('dashboard/focus')) ? 'bg-cyan-800' : 'bg-transparent' }}">
                                <!-- Heroicon name: outline/clock -->
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Focus Zone
                            </a>
                        </div>
                        <div class="flex flex-col items-start justify-end h-full">
                            <div class="border-t border-cyan-900 opacity-50 w-full h-4"></div>
                            <div class="px-2 space-y-1 w-full">
                                <a href="#" class="group flex items-center px-2 py-2 text-base font-bold rounded-md text-cyan-100 hover:text-white hover:bg-cyan-800">
                                    <!-- Heroicon name: outline/cog -->
                                    <svg class="mr-4 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Settings
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true"
                x-show="navClosed">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="relative hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col flex-grow bg-[#242235] pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <a href="{{ route('home') }}" class="flex items-end group">
                            <img class="h-8 w-auto group-hover:opacity-75 cursor-pointer transition-all" src="/img/logo-home-page.svg" alt="Stay Focused Logo">
                            <span class="ml-2 whitespace-nowrap text-white font-bold group-hover:opacity-75 text-2xl">
                                Stay Focused
                            </span>
                        </a>
                    </div>
                    <nav class="mt-5 flex-1 flex flex-col overflow-y-auto" aria-label="Sidebar">
                        <div class="mb-2 px-2 space-y-1">
                            <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
                            <button type="button" class="mb-8 w-full bg-cyan-500 hover:bg-cyan-400 text-white group flex items-center px-2 py-4 text-sm leading-6 font-medium rounded-md" aria-current="page" x-on:click="openModal = true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-grow h-16 w-16 text-cyan-200" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <a href="{{ route('dashboard') }}" class="text-white group flex items-center px-2 py-2 text-sm leading-6 font-bold rounded-md hover:bg-cyan-800 {{ (request()->is('dashboard')) ? 'bg-cyan-800' : 'bg-transparent' }}" aria-current="page">
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                {{ __('Home') }}
                            </a>

                            <a href="{{ route('focus') }}" class="text-cyan-100 hover:text-white hover:bg-cyan-800 group flex items-center px-2 py-2 text-sm leading-6 font-bold rounded-md {{ (request()->is('dashboard/focus')) ? 'bg-cyan-800' : 'bg-transparent' }}">
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Focus Zone
                            </a>
                        </div>
                        <div class="flex flex-col items-start justify-end h-full">
                            <div class="border-t border-cyan-900 opacity-50 w-full h-4"></div>
                            <div class="px-2 space-y-1 w-full">
                                <a href="{{ route('profile.show') }}" class="group flex items-center px-2 py-2 text-sm leading-6 font-bold rounded-md text-cyan-100 hover:text-white hover:bg-cyan-800 w-full {{ (request()->is('user/profile')) ? 'bg-cyan-800' : 'bg-transparent' }}">
                                    <svg class="mr-4 h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ __('Settings') }}
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="lg:pl-64 flex flex-col flex-1">

                @livewire('navigation-menu')

                <main class="flex-1 pb-8">

                    {{ $slot }}

                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <x-conditioned-time></x-conditioned-time>
    </body>
</html>
