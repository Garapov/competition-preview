<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <link rel="preload" as="style" href="https://garapov-competition-preview-ebf0.twc1.net/build/assets/app-oTPo2Bbo.css" />
        <link rel="modulepreload" href="https://garapov-competition-preview-ebf0.twc1.net/build/assets/app-BmrwFrBv.js" />
        <link rel="stylesheet" href="https://garapov-competition-preview-ebf0.twc1.net/build/assets/app-oTPo2Bbo.css" data-navigate-track="reload" />
        <script type="module" src="https://garapov-competition-preview-ebf0.twc1.net/build/assets/app-BmrwFrBv.js" data-navigate-track="reload"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <x-header />

        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>

        <x-footer />

        @livewireScripts
    </body>
</html>
