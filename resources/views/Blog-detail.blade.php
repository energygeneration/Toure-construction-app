
@extends('adminHome')

@section('content')

<body>


<div class="container mt-5">
<div class="card shadow">
  <div class="card-header bg-warning text-center"><h3>Listes des Blogs</h3></div>
  <div class="card-body">
  <table class="table" border="2">
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>image</th>
    <th>message</th>
    <th>Action</th>

    @foreach (  $blogs as $blog )
  <tr>
    <td>{{$blg->id}}</td>
    <td>{{$blog->first_name}}</td>
    <td>{{$blog->last_name}}</td>
    <td>{{$blog->image}}</td>
    <td>{{$blog->message}}</td>
    <td>
       <a href="http://" class="btn btn-warning">Modifier</a> 
       <a href="http://" class="btn btn-danger">Supprimer</a> 
    </td>
  </tr>
    
  @endforeach
</table>
</div>
</div>
</div>

</body>
@endsection