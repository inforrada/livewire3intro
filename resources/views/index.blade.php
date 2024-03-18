<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd;}
            th { background-color: #f2f2f2;}
            input {border-style:1px solid #888; background-color:  #f2f2f2;}
        </style>
        @livewireStyles
    </head>
    <body>
        <h1>Livewire 3 en Laravel 11</h1>
        <livewire:filter-user />  
        @livewireScripts
    </body>
</html>
