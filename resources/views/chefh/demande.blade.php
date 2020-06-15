@extends('layouts.nav1')
@section('title')
Demamdes de conge
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
<h4 class="card-title mt-0"> Table des demandes de congé  en attente</h4>
<p class="card-category"> </p>
</div>
<div class="card-body">
<div class="table-responsive">
<table id="example" class="table table-hover">
<thead class="">

<th>Nom</th>
<th>Type Conge</th>
<th>date conge</th>
<th>Jour reservee</th>
<th>jour consommee</th>
<th>solde Conge</th>
<th>date creation</th>
<th>Etat</th>
<th>commentaire</th>
<th>accepter</th>
<th>refuser</th>
</thead>
<tbody>
@foreach($conge as $conge)

<tr>
<td>  <a href="/us/{{$conge->id}}">{{$conge->user->name}}</a></td>
<td>{{$conge->typeconge->nom}}</td>
<td>{{$conge->datedebut}}   <b >a </b> {{$conge->datefin}}</td>
<td>  {{$conge->jour}}</td>
<td>  {{$conge->user->jour}}</td>
<td>  {{$conge->user->solde}} </td>
<td>{{$conge->created_at}}</td>
<td> <span class="badge badge-warning">en attente</span> </td>
<td> <a data-toggle="modal"  data-target="#exampleModal" ><span class="material-icons">
comment
</span></a></td>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        commentaire
        </div>
        <div class="modal-body">
        {{$conge->raison}}
        
        </div>
    </div>
  </div>
</div>
<td>    <form action="/confirmer/{{$conge->id}}/edit" method="POST">
@csrf
@method('PUT')
<button type="submit" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons">done</span></button></td>
</form>

<td>

<button type="button" class="btn btn-warning btn-round" data-conge_id='{{$conge->id}}' data-toggle="modal"  data-target="#refu" ><span class="material-icons">cancel</span></button></td>

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







<div class="modal modal-danger fade " id="refu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Motif de refus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
      <form action="/refuser" method="POST">
@csrf

    
        <div class="modal-body">
            <p>Ercivez Une justification de refus </p>
              <input type="hidden" name="conge_id" id="conge_id">
          
            <label for="message-text"   class="col-form-label">justification</label>
            <textarea   name="justification" class="form-control" id="message-text"></textarea>
          
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit"  onclick="md.showNotificationn('top','right')" class="btn btn-warning">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>



<script>
    $('#refu').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)

     var conge_id= button.data('conge_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation de suppresion');
 
     modal.find('.modal-body #conge_id').val(conge_id);




    })
    
    
    
    </script>
@endsection
