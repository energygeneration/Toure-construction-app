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
<div class="container text-center">
   <h2 class="fw-bold mt-3 ">PRENDRE RENDEZ-VOUS</h2>
 </div>
 
 <form>
 <div class="">
 <div class="col-md-4 mb-3 mx-auto">
 <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col-md-4 mb-3 mx-auto">
  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-4 mb-3 mx-auto">
  <input type="email" class="form-control" placeholder="Email" aria-label="Email">
  </div>
  <div class="col-md-4 mb-3 mx-auto">
  <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone">
  </div>
  <div class="col-md-4 mb-3 mx-auto">
  <input type="date" class="form-control" placeholder="Date" aria-label="Date">
  </div>
  <div class="col-md-4 mb-3 mx-auto">
  <input type="time" class="form-control" placeholder="Heure" aria-label="Heure">
  </div>
  <div class="col-md-4 mx-auto my-4">
  <button type="submit" class="btn btn-warning">Prendre rendez-vous</button>
  </div>
</form>
</div>
@endsection
</body>
</html>