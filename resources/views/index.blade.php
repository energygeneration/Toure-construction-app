<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
 </head>
 @extends('layouts.app') 
 
 @section('content')
 <body>
 <div class="img vh-100 d-flex justify-content-center align-items-center text-white">
         <div class="content text-center">
             <h1 class="fw-bold ">BIENVENUE CHEZ TOURE CONSTRUCTION</h1> <br>
         </div>
     </div>
     <div class="container-fluid" style="background-color:#FFFFFF">
         <div class="container">
            <h1 class="texte dark mt-3">Entreprise de construction et Rénovation</h1>
                 <div class="row g-0 pb-5 pt-3">
                     <div class="col-md-6">
                         <img src="/assets/img/metier.jpg" class="img-fluid rounded-start" alt="...">
                     </div>
                     <div class="col-md-6">
                         <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                 to additional content. This content is a little bit longer.</p>
                             <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="containaire-fluid pt-3 pb-3" style="background-color:#FFB600">
     <div class="container overflow-hidden">
     <div class="text-white pt-3"><h1>Pourquoi nous choisir</h1></div>
  <div class="row" style="height">
    <div class="col-4">
    <div class="text-dark pt-3"><h4>Consultation gratuite</h4></div> 
      <div class="p-3 border bg-light">Custom column padding Chez Le Site Français,<br> nous créons des sites internet et nous le faisons bien <br>! Nous réalisons votre site internet vitrine ou site e-commerce en France dans les règles de l’art avec la</div>
    </div>
    <div class="col-4">
    <div class="text-dark pt-3"><h4>Service reconu</h4></div> 
      <div class="p-3 border bg-light">Custom column padding Chez Le Site Français, <br> nous créons des sites internet et nous le faisons bien <br> ! Nous réalisons votre site internet vitrine ou site e-commerce en France dans les règles de l’art avec la</div>
    </div>
    <div class="col-4">
    <div class="text-dark pt-3"><h4>Agence agréée et assurée</h4></div> 
      <div class="p-3 border bg-light">Custom column padding Chez Le Site Français, <br> nous créons des sites internet et nous le faisons bien <br> ! Nous réalisons votre site internet vitrine ou site e-commerce en France dans les règles de l’art avec la</div>
    </div>
    </div>
  </div>
</div>

<div class="container text-center mb-5 mt-4">
   <h3>Besoin d'une entreprise de construction <br> vérifiée pour réaliser vos travaux ?</h3>
   <button type="button" class="btn btn-warning mt-4 py-3">Parlez-nous de votre projet</button>
</div>
 
@endsection

 </body>
 </html>