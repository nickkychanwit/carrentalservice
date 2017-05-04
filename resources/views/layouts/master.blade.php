<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "rental" }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')
    </body>
</html>
