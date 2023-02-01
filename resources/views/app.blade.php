<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Larazillow</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="bg-white text-gray-800" >
        @inertia
    </body>
</html>
