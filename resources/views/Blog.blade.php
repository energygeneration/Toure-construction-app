  
 @extends('layouts.app')

@section('content')




<div class="container mt-4">
  <div class="row">


@foreach ($blog as $b )
  

    <div class="col-4">
  <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($b->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$b->first_name}}</h5>
    <p class="card-title">{{$b->last_name}}</p>
    <p class="card-text">{{$b->message}}</p>
  </div>
  </div>
  </div>


  @endforeach

  </div>
  </div>



  @endsection