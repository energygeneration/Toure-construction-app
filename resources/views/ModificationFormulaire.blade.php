@extends('adminHome')
@section('form_modif')

<form class="section" action="{{ url('ModifFormulaire/'.$rdv_line->id) }}" method="post">
    {{ csrf_field() }}
    @method('put')
    <div class="field">
        <label class="label">Prenom</label>
        <div class="control">
            <input class="input" type="text" value="{{$rdv_line->first_name}}" name="first_name">
        </div>
        @if($errors->has('first_name'))
            <p class="help is-danger">{{ $errors->first('first_name') }}</p>
        @endif
    </div>
    <div class="field">
        <label class="label">Nom</label>
        <div class="control">
            <input class="input" type="text" value="{{$rdv_line->last_name}}" name="last_name">
        </div>
        @if($errors->has('last_name'))
            <p class="help is-danger">{{ $errors->first('last_name') }}</p>
        @endif
    </div>
    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input class="input" type="email" value="{{$rdv_line->email}}" name="email">
        </div>
        @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Telephone</label>
        <div class="control">
            <input class="input" type="number" value="{{$rdv_line->phone}}" name="phone">
        </div>
        @if($errors->has('phone'))
            <p class="help is-danger">{{ $errors->first('phone') }}</p>
        @endif
    </div>
    <div class="field">
        <label class="label">Date</label>
        <div class="control">
            <input class="input" type="date" value="{{$rdv_line->date}}" name="date">
        </div>
        @if($errors->has('date'))
            <p class="help is-danger">{{ $errors->first('date') }}</p>
        @endif
    </div>
    <div class="field">
        <label class="label">Heure</label>
        <div class="control">
            <input class="input" type="time" value="{{$rdv_line->heure}}" name="heure">
        </div>
        @if($errors->has('heure'))
            <p class="help is-danger">{{ $errors->first('heure') }}</p>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <a href=""><button class="button is-link" type="submit">Modifier</button></a>
        </div>
    </div>
</form>
@endsection