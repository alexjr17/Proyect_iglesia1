<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" /> --}}

        

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @livewire('navigation')

            <!-- Page Content -->
            {{ $slot }}

            <!-- Page footer -->
            @livewire('footer')
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
