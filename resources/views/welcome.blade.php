<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/main.css')
    </head>
    <body class="bg-blue-200 min-h-screen bg-gradient-to-tr from-blue-200 to-blue-400">
        <div class="mt-8">
            <x-weather-widget :current="$current" :feature="$feature" :location="$location" />
        </div>
    </body>
</html>
