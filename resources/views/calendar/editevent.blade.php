@extends('layouts.nav1')
@section('title')

@endsection

@section('content')
<h2>les evenements</h2>
<div class="container">

<table class="table table-striped table-bordered table-hover">
<thead class="thead">
<tr class="warning">
<th>ID</th>
<th>titre</th>
<th>Couleur</th>
<th>date de debut</th>
<th>date de fin</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
@forelse($events as $events)
<tbody>
<tr>
<td>{{$events->id}}</td>
<td>{{$events->title}}</td>
<td>{{$events->color}}</td>
<td>{{$events->start_date}}</td>
<td>{{$events->end_date}}</td>

<th> <button type="button" rel="tooltip" title="Editer" data-toggle="modal"  data-target="#edit" class="btn btn-success btn-link btn-sm">
<i class="material-icons">edit</i> </button></th>

<th> 
<form action="/events/{{$events->id}}" method="post">
@csrf

<input type="hidden" name="_method" value="DELETE">
<button type="submit"rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">  <i class="material-icons">delete</i> </button>
</form>
</th>
</tr>
@empty
No data
@endforelse

</tbody>

</table>
</div>

<h2>les conges</h2>


<div class="container">

<table class="table table-striped table-bordered table-hover">
<thead class="thead">
<tr class="warning">
<th>ID</th>
<th>Nom</th>
<th>Type de conge</th>
<th>date de debut</th>
<th>date de fin</th>
</tr>
</thead>

@foreach($conges as $conges)
@if($conges->avis==1)
<tbody>
<tr>
<td>{{$conges->id}}</td>
<td>{{$conges->user->name}}</td>
<td>{{$conges->typeconge->nom}}</td>
<td>{{$conges->datedebut}}</td>
<td>{{$conges->datefin}}</td>
</tr>

</tbody>

@endif
@endforeach

</table>
</div>





<!-- modifier event -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifer un evenement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2>Mettre a jour votre DATA</h2>
        <form  action="/events/{{$events->id}}" method="POST">
        @method("PUT")
        @csrf
        

<div class="form-group">
<label for="recipient-name" class="col-form-label">le titre de l'evenement</label>
<input type="text" value ="{{$events->title}}" name="title" class="form-control" id="nom">
</div>

<div class="form-group">
<label for="recipient-name" class="col-form-label">la couleur de l'evenement</label>
<input type="text" value ="{{$events->color}}" name="color" class="form-control" id="nom">
</div>

<div class="form-group">
<label for="recipient-name" class="col-form-label">le titre de debut</label>
<input type="text" value ="{{$events->start_date}}" name="start_date" class="form-control" id="start_date">
</div>

<div class="form-group">
<label for="recipient-name" class="col-form-label">la date de fin</label>
<input type="text" value ="{{$events->end_date}}" name="end_date" class="form-control" id="end_date">
</div>



<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Editer</button>
</div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection