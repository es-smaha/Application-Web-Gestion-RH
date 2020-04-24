@extends('layouts.nav4')

@section('content')
        <p>Bonjour Monsier {{$conge->user->name}}</p>
        <p>Votre demande de conge {{$conge->typeconge->nom}} ete refuser </p>

 
@endsection