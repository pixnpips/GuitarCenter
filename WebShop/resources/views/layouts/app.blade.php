<!DOCTYPE html>
{{--Originale Datei --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>


{{--Die aus dem CRUD Tutorial--}}

{{--    <html lang="en">--}}
{{--        <head>--}}
{{--            <meta charset="UTF-8">--}}
{{--            <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--            <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--            <title>Laravel 5.8 CRUD Example Tutorial</title>--}}
{{--            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}
{{--        </head>--}}
{{--    <body>--}}
{{--    <div class="container">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
{{--    </body>--}}
</html>
