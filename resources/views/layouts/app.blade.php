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
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-white">
         <div class="container">
         
         <a class="navbar-brand" href="#"><img src="assets/img/mon logo.png" alt=""style="height:50px" class="img-fluid"></a>
        
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav  ms-auto  ">
                         <li class="nav-item">
                             <a class="nav-link text-dark" href="acceuil">Acceuil</a>
                         </li>  

          
                         <li class="nav-item">
                             <a class="nav-link text-dark" href="service">Nos services</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link text-dark" href="#Nos réalisations">Nos réalisations</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link text-dark" href="#Nous contacter">Nous contacter</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link text-dark" href="Blog">Blog</a>
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
                                <li class="nav-item ">
                                   
                                    <div class="nav-link " aria-labelledby="navbarDropdown">
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

     <div class="container-fluid" style="background-color:#FFFFFF">
     <div class="container">
        <div class="text-center mt-5 pt-4"><h2 id="Nous contacter">Nous contactez</h2></div>
        <div class="row ">
          <div class="col-5">
             <h4>Parlons ensemble de votre projet</h4>
             <p>Contactez-nous pour résever une consultation gratuite</p> <br>
             <h4>Vous pouvez soit</h4>
            <a href="tel:+228 90251696"><p>Appelez-nous directement sur: 00228 90251696</p></a> 
             <p  class="">ou</p>
            <a href="mailto:ouroniletakiyatou@gmail.com"><p>Envoyez-nous un E-mail:ouroniletakiyatou@gmail.com</p></a> 
          </div>
        
          <div class="col-7 pt-3">
   
          <form class="row g-3">
          @csrf
          <div class="col-md-6 formulaire">
                 <input type="text" class="formulaire" id="inputName" placeholder="Prénom"name="first_name">
           </div>
           <div class="col-md-6 formulaire">
                 <input type="text" class="formulaire" id="inputName" placeholder="Nom"name="last_name">
           </div>
          <div class="col-md-6 formulaire">
                 <input type="email" id="inputEmail4" placeholder="E-mail"name="email">
           </div>
           <div class="col-md-6 formulaire">
                 <input type="Number" class="formulaire" id="inputName" placeholder="Télephone"name="phone">
           </div>
           <div class="col-md-10 formulaire">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
           </div>
            <div class="pt-3 mb-4">
               <a href=""><button type="button" class="btn btn-warning">Soumettre</button></a>  
             </div>
            </div> 
            </form> 
          </div>
        </div>
     </div>

     <div class="container-fluid"style="background-color:#FFB600">
    <div class="container text-center pb-4">
    <h3 class="text-center text-white pt-3  fw-bold"> NOS RESEAUX SOCIAUX</h3>
    <div class="row">
      <div class="col-md-3 mt-3">
        <a href=""><img src="assets/img/Facebook.svg" alt="" style="width:50px; height:50px" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mt-3">
        <a href=""><img src="assets/img/Twitter.svg" alt="" style="width:50px; height:50px" class="img-fluid">
       </a>
      </div>
      <div class="col-md-3 mt-3">
        <a href=""><img src="assets/img/YouTube.svg" alt="" style="width:50px; height:50px" class="img-fluid"></a>
       
      </div>
      <div class="col-md-3 mt-3">
      <a href=""><img src="assets/img/Linkedin.svg" alt="" style="width:50px; height:50px" class="img-fluid"></a>  
      </div>
    </div>
  </div>
  </div>

    <div class="container-fluid" style="background-color:white;">
      <div class="row">
        <div class="col text-center text-dark pt-2 pb-2">Copiryright 2022</div>
    </div>
  </div>
  
  <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

