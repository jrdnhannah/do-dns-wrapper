<!DOCTYPE html>

<html lang="en">
    <head>
        <title>{{ $title ?? 'DNS' }}</title>

        @include('layout.parts.meta')
        @include('layout.parts.styles')
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('layout.parts.scripts')
    </body>
</html>