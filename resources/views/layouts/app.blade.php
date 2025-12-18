<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('img/Onep.png')}}" type="image/x-icon">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    
    @if (session('success'))
       
    <div id="falsh" class="p-4 text-center bg-green-50 text-green-500 dark:bg-green-200 dark:text-green-500 font-bold">
        {{session('success')}}
    </div>
        
    @endif
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
    </body>
    <script>
       
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            document.body.style.margin = '40px';
            window.print();
            document.body.style.margin = '0';
            document.body.innerHTML = originalContents;
        }

        
        
    </script>

</html>
