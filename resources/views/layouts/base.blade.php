<html>
    <head>
        <title>App Name - @yield('title')</title>
        @stack('styles')
        @stack('css')
        @stack('js')
      
       
    </head>
    <body>
        @section('header')
        @if (Route::has('login'))
        <header>
           @auth
           <a href="locale/am">am</a>
           <a href="locale/en">en</a>
           <a href="locale/ru">ru</a>

           <a href="{{ URL::to('') }}">Home</a>
           {{ Auth::user()->name }}
           <a href="{{ URL::to('add-contact') }}">Contact</a>
           <a href="{{ route('all.contact') }}">All Contact</a>

           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
           @else
           <a href="{{URL::to('home')}}">Login</a>
           
           @endauth
         </header>
          @endif
        @show

        <div class="footer">
            @yield('footer')
            
        </div>
    </body>
</html>