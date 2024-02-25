<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

        @isset($heading)
        {{ $heading }}
        @endisset

        <hr/>
        <h1 class="bg-red-500 text-3xl">Todos</h1>

         {{ $slot }}

         @isset($footer)
        {{ $footer }}
        @endisset
        
    </body>
</html>