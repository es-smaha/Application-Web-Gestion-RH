@extends('layouts.nav1')
@section('title')

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">note_add</span></i> les demandes en attentes
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/conge-refuser">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> les demandes refuser
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  " href="/conge-accepter" >
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> les demandes accepter
                  <div class="ripple-container"></div>
                </a>
              </li>
          
            </ul>
          </div>
        </div>
      </div>  

<div class="container-fluid">
<!-- Mes demandes de Conge  -->


<div class="col-md-12">
<div class="card card-plain">
<div class="card-header card-header-primary">
<h4 class="card-title mt-0"> Table on Plain Background</h4>
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
<th>jour consommee</th>
<th>solde Conge</th>
<th>date creation</th>
<th>Etat</th>
<th>edit</th>
<th>delete</th>
</thead>
<tbody>
@foreach($conge as $conge)

<tr>
<td>  <a href="/us/{{$conge->id}}">{{$conge->user->name}}</a></td>
<td>{{$conge->typeconge->nom}}</td>
<td>{{$conge->datedebut}}   <b >a </b> {{$conge->datefin}}</td>
<td>  {{$conge->jour}}</td>
<td>  {{$conge->user->jour}}</td>
<td>  {{$conge->user->solde}}</td>
<td>{{$conge->created_at}}</td>


<td> <span class="badge badge-warning">en attente</span> </td>

<td>    <form action="/confirmer/{{$conge->id}}/edit" method="POST">
@csrf
@method('PUT')
<button type="submit" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>confirmer</button></td>
</form>

<td>
<form action="/refuser/{{$conge->id}}" method="POST">
@csrf
@method('PUT')
<button type="submit" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>refuser</button></td>
</form>
</td>





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
