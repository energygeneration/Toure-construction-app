
@extends('adminHome')

@section('content')

<body>


<div class="container mt-5">
<div class="card shadow">
  <div class="card-header bg-warning text-center"><h3>Listes des rendez-vous</h3></div>
  <div class="card-body">
  <table class="table" border="2">
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Date</th>
    <th>Heure</th>
    <th>Action</th>

    @foreach (  $contacts as $contact )
  <tr>
    <td>{{$contact->id}}</td>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->last_name}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->phone}}</td>
    <td>{{$contact->date}}</td>
    <td>{{$contact->heure}}</td>
    <td>
       <a href="{{route('ModificationFormulaire',[$contact->id])}}" class="btn btn-warning">Modifier</a> 
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