<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Campusexams') }}</title>

  <!--Personal Profile-->  
  <link  rel="stylesheet" href="{{ asset('css/styles.css') }}" >

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Google  fonts-->
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>

<div id="app">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id = "navigation-bar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" id="navigation-bar-logo">{{ config('app.name', 'Campusexams') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a id="navigation-bar-item" class="nav-link" href="/" > Home  </a>
        </li>
        <li class="nav-item">
        <a id="navigation-bar-item" class="nav-link" href="/pastpapers"> Pastpapers</a>
        </li>
        <li class="nav-item">
        <a id="navigation-bar-item" class="nav-link" href="/tutorial">Tutorial</a>
        </li>
        <li class="nav-item">
            <a id="navigation-bar-item" class="nav-link" href="/references">References</a>
        </li>
        <li class="nav-item">
            <a id="navigation-bar-item" class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a id="navigation-bar-item" class="nav-link" href="/contact_us">Contact us</a>
        </li>  
      </ul>

                         <!-- Right Side Of Navbar -->
                         <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/posts">Let's Chat</a></li>  
                        

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('login') }}" id="navigation-bar-item">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"3 id="navigation-bar-item">{{ __('Register') }}</a>
                                </li>
                            @endif
       
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <img  id="menu-bar-icon" src="/svg/menu-bar.png" width="25px" height="40px" style="padding-top:20px; padding-left:5px; float:right"> 
                        <div id="menu-bar-container"></div>
                    </ul>
                    
    </div>
  </div>
</nav>
</div>
        <main class="py-4">
            @include('inc.messages')
            @yield('content')
            
            
        </main>
    </div>



<div class="footer">
    <div class="copyright"><p> &copy; 2021 Campusexams </p></div>
    <div>Developer: <img src="/svg/brandon_image.jpg" width="50px" height="50px" style="border-radius:50%"> Brandon Wanambisi</div>
</div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
   
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

