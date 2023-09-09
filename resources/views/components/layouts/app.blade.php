<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased bg-gray-100 text-stone-800">
        <header class="max-w-5xl mx-auto py-6">
            <a href="/" wire:navigate class="block text-4xl text-center">
                {{ config('app.name') }}
            </a>
        </header>

        <main class="max-w-5xl mx-auto py-4">
            {{ $slot }}
        </main>

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
