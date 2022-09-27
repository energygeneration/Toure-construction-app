@extends('adminHome')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
  <div class="container text-center">
   <h2 class="fw-bold  ">FORMULAIRE BLOGS</h2>
 </div>
 <form action="{{ route('blog.create') }}" method="POST">
  @csrf
  <div class="container">
  <div class="row g-3 col-md-8 mb-3 mt-4 mx-auto">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" aria-label="First name"name="first_name">
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"name="last_name">
    </div>
  </div>
  <div class="row g-3 col-md-8 mb-3 mt-4 mx-auto">
  <label for="formFile" class="form-label"></label>
  <input class="form-control" type="file" accept="image/*" id="formFile"name="image">
</div>
<div class="row g-3 col-md-8 mb-3 mt-4 mx-auto">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="col-md-4 mx-auto my-4">
       <button type="submit" class="btn btn-warning">Ajouter</button>
    </div>
</div>
</form>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
@endsection