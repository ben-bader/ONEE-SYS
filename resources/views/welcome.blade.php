<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ONEEP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-gray-50 dark:bg-gray-700 text-blue-900 flex lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="flex item-center justify-between bg-blue-100 dark:bg-gray-800 lg:max-w-4xl w-full text-sm mb-6 py-2 px-5 rounded not-has-[nav]:hidden">
            <x-application-logo/>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4 ">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 text-blue-900 dark:text-white border-[#19140035] hover:border-[#1915014a] border dark:border-white dark:hover:border-[#60605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-blue-900 dark:text-white  border border-transparent hover:border-[#19140035] dark:hover:border-white rounded-sm text-sm leading-normal"
                        >
                            Se connecter
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 text-blue-900 dark:text-white border-[#19140035] hover:border-[#1915014a] border  dark:border-white
                                dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                S'inscrire
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        
        
        </div>   

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
