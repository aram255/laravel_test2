<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('header')
            This is the Header
        @show

        <div class="container">
            @yield('footer')
        </div>
    </body>
</html>