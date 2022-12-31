<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Larazillow</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body >
        @inertia
    </body>
</html>
