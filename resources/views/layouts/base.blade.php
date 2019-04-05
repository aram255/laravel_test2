<html>
    <head>
        <title>App Name - @yield('title')</title>
        @stack('styles')
        @stack('css')
        @stack('js')
      
       
    </head>
    <body>
        @section('header')
        <header>
           <a href="{{ URL::to('add-contact') }}">Contact</a>
           <a href="{{ route('all.contact') }}">All Contact</a>
         </header>
        @show

        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>