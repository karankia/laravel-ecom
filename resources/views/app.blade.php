<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Larazillow</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="bg-white dark: bg-gray-900" >
        @inertia
    </body>
</html>
