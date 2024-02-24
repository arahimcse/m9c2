<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>

        @isset($heading)
        {{ $heading }}
        @endisset

        <hr/>
        <h1>Todos</h1>

         {{ $slot }}

         @isset($footer)
        {{ $footer }}
        @endisset
        
    </body>
</html>