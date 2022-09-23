
@extends('layouts.app') 
 
 @section('content')
<body>  
<div class="container text-center">
   <h2 class="fw-bold mt-3 ">PRENDRE RENDEZ-VOUS</h2>
 </div>

 <form action="{{ route('contact.create') }}" method="POST">
 @csrf
 <div class="">
 <div class="col-md-4 mb-3 mx-auto">
 <input type="text" class="form-control {{ $errors->has('first_name') ? 'error' : '' }}" placeholder="First_name" aria-label="first_name" name="first_name">

  </div>
    <div class="col-md-4 mb-3 mx-auto">
       <input type="text" class="form-control {{ $errors->has('last_name') ? 'error' : '' }}" placeholder="Last_name" aria-label="last_name" name="last_name">
    </div>
    <div class="col-md-4 mb-3 mx-auto">
       <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" aria-label="email" name="email">
    </div>
    <div class="col-md-4 mb-3 mx-auto">
       <input type="number" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Telephone" aria-label="phone" name="phone">
    </div>
    <div class="col-md-4 mb-3 mx-auto">
       <input type="date" class="form-control {{ $errors->has('date') ? 'error' : '' }}" placeholder="Date" aria-label="date" name="date">
    </div>
    <div class="col-md-4 mb-3 mx-auto">
       <input type="time" class="form-control {{ $errors->has('heure') ? 'error' : '' }}" placeholder="heure" aria-label="heure" name="heure">
    </div>
    <div class="col-md-4 mx-auto my-4">
       <button type="submit" class="btn btn-warning">Prendre rendez-vous</button>
    </div>
</form>
</div>
@endsection
