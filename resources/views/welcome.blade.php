<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Admin</title>

    </head>
    <body class="antialiased">
       <div id="app"></div>

       @vite('resources/js/index.js')
    </body>
</html>
