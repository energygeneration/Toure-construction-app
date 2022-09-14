<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-white">
         <div class="container-fluid ">
         
         <a class="navbar-brand" href="#"><img src="assets/img/mon logo.png" alt=""style="height:50px" class="img-fluid"></a>
        
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav  ms-auto  ">
                         <li class="nav-item">
                             <a class="nav-link text-dark" href="index">Acceuil</a>
                         </li>

                         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="service" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 A Propos
             </a>
             <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="service">Nos service</a></li>
                  <li><a class="dropdown-item" href="#Nos réalisation">Nos réalisations</a></li>
             </ul>
          </li>
                         <li class="nav-item">
                             <a class="nav-link text-dark" href="#Nous contacter">Nous contacter</a>
                         </li>

                         
                         <li class="nav-item">
                             <a class="nav-link text-dark" href="#">Espace client</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link text-dark" href="rendez-vous">Prendre rendez-vous</a>
                         </li>
              
        
                      </ul>
                        <ul class="navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}"> <button type="button" class="btn btn-primary py-2">Login</button></a>
                            @endif

                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn btn-warning py-2">register</button></a> 
                            @endif
                            
                        

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                       </ul>
                 </div>
             </div>
             
         
     </nav> 
     </div> 

     @yield('content')
     @include('footer')
 
</body>
</html>
