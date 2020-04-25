@extends('layouts.nav3')
@section('title')

@endsection

@section('content')


<div class="container-fluid">
<!-- Mes demandes de Conge  -->


<div class="col-md-12">
<div class="card card-plain">
<div class="card-header card-header-primary">
<h4 class="card-title mt-0"> Les demandes non-traite</h4>
<p class="card-category"> Here is a subtitle for this table</p>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover">
<thead class="">


<th>Nom</th>
<th>Type Conge</th>
<th>date conge</th>
<th>Jour reservee</th>
<th>date creation</th>
<th>Etat</th>
<th>edit</th>
<th>delete</th>
</thead>
<tbody>

@foreach($conge as $conge)
@if($conge->decision==0)
<tr>
<td>{{$conge->user->name}}</td>
<td>{{$conge->typeconge->nom}}</td>
<td>{{$conge->datedebut}}   <span> a </span> {{$conge->datefin}}</td>
<td>{{$conge->jour}}</td>

<td>{{$conge->created_at}}</td>


<td> <span class="badge badge-warning">en attente</span> </td>

<td>    <form action="/confin/{{$conge->id}}" method="POST">
@csrf
@method('PUT')
<button type="submit" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>confirmer</button></td>
</form>



@endif
@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')

@endsection
