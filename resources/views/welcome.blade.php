<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
       
    </head>
    <body>
        <livewire:bird-form />
        <!-- <livewire:lazy lazy /> -->
        <!-- Hello World -->
        <!-- <div>
            <h1>Send Event</h1>
            <livewire:send-event />
        </div>
        <div>
            Receive
            <livewire:receive-event />
        </div> -->
    </body>
</html>
