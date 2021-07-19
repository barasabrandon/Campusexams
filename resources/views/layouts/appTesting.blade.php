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
    <nav  class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id = "navigation-bar">
            <div class="container">
                <a class="navbar-brand d-flex" href="/">
                    
                   <div class="pl-3" id="navigation-bar-logo">{{ config('app.name', 'Campusexams') }}</div> 
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">                       
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/" > Home  </a></li>
                        <li class="nav-item"> <a id="navigation-bar-item" class="nav-link" href="/pastpapers"> Pastpapers</a></li>
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/tutorial">Tutorial</a></li>
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/references">References</a></li>
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/contact_us">Contact us</a></li>  
                                             
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item"><a id="navigation-bar-item" class="nav-link" href="/posts">Let's Chat</a></li>  
                        

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('login') }}" >{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        
        <main class="py-4">
            @include('inc.messages')
            @yield('content')
            
            
        </main>
    </div>



    

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
   
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

