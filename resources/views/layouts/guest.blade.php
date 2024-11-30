<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Stocklytic') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        
        <!-- Scripts -->
    </head>
    <style>
        /* Smooth fade-in effect on page load */
        body {
        opacity: 0;
        animation: fadeInFromLeft 1s ease-in-out forwards;
    }
    
    @keyframes fadeInFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-1%); /* Starts off-screen to the left */
        }
        100% {
            opacity: 1;
            transform: translateX(0); /* Ends at its normal position */
        }
    }
        </style>
    <body>
        <header>
            @include('components.header') 
        </header>

        <main class="flex-1">
                @yield('content')

        </main>

        <footer> 
            @include('components.footer')   
        </footer>
    </body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.body.style.transition = 'opacity 1s ease-in-out';
        document.body.style.opacity = 1;
    });
    </script>
