@extends('layouts.nav3')
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
                <a class="nav-link " href="/confin" >
                  <i class="material-icons"><span class="material-icons">note_add</span></i> les demandes en attentes
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/decision-refuser">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> les demandes refuser
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " href="/decision-accepter" >
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
<th>Jours demandés</th>
<th>solde Conge</th>
<th>date creation</th>
<th>Avis chef hierarchique</th>
<th>Confirmation responsable</th>

</thead>
<tbody>

@foreach($conge as $conge)
@if($conge->avis==1 && $conge->decision==1)
<tr>
<td>{{$conge->user->name}} <span class="badge badge-warning">{{$conge->user->jour}}</span></td>
<td>{{$conge->typeconge->nom}}</td>
<td>{{$conge->datedebut}}   <b >a </b> {{$conge->datefin}}</td>
<td>  {{$conge->jour}}</td>
<td>  {{$conge->user->solde}}

<button type="button" rel="tooltip" id="#update"  data-toggle="modal" data-target="#update" title="update" class="btn btn-danger btn-link btn-sm">
<span class="material-icons">update</span></button>

</td>

<td>{{$conge->created_at}}</td>


<td> <span class="badge badge-success">accepté</span> </td>
<td> <span class="badge badge-success">accepté </span> </td>
<!-- update conge -->


<div class="modal modal-danger fade " id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier la Demande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="/solde" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="conge_id" id="user_id" value="{{$conge->id}}">

        <div class="form-group">
<label for="message-text"   class="col-form-label">solde conge</label>
<input type="text"   name="solde" id="user_id" value="{{$conge->user->solde}}">
</div>

<div class="form-group">
<label for="message-text"   class="col-form-label">jour consommer</label>
<input type="text"   name="jour" id="user_id" value="{{$conge->jour}}">
</div>


<div class="form-group">
<label for="message-text"   class="col-form-label">date de debut</label>
<input type="date"   name="datedebut" id="user_id" value="{{$conge->datedebut}}">
</div>
<div class="form-group">
<label for="message-text"   class="col-form-label">date de fin</label>
<input type="date"   name="datefin" id="user_id" value="{{$conge->datefin}}">
</div>

<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
<button type="submit" onclick="md.showNotificationn('top','center')" class="btn btn-success"  >Modifier</button>
@csrf
</form>
</div>
</div>
</div>
</div>
</div>












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
