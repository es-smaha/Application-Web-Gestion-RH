@extends('layouts.nav4')
@section('title')
Demande de conge
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
                <a class="nav-link active" href="#profile" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">note_add</span></i> Effectuer une demande de conge
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> Consulter mes demandes
                  <div class="ripple-container"></div>
                </a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </div>
           <!--  -->
           <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
           <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card card-stats">
                <div class="card-header card-header-dark card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  
                  <h3 class="card-title">Effectuer une demande</h3>
                  <div id="profile">
        <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>Ajouter Demande de conge </button>
            <br>
            </div>

              

                </div>
               
              </div>
            </div>
          </div>
        

<div class="tab-pane" id="messages">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover" id="example">
<thead class="">
<th>Nom</th>
<th>Type Conge</th>
<th>date conge</th>
<th>Jour reservee</th>
<th>date creation</th>
<th>Etat</th>
<th>edit</th>
<th>delete</th>

<th>recu</th>

</thead>
<tbody>
@if(count($conge)>0)
@foreach($conge as $conge)

@if(!auth::guest())
@if(auth::user()->id==$conge->user_id)
<tr>
<td>  <a >{{$conge->user->name}}</a></td>
<td>{{$conge->typeconge->nom}}</td>
<td>{{$conge->datedebut}}   <span> a </span> {{$conge->datefin}}</td>
<td>{{$conge->jour}}</td>
<td>{{$conge->created_at}}</td>

@if($conge->avis=='0' && $conge->decision==false  ||$conge->avis=='2' && $conge->decision==false)
<td> <span class="badge badge-warning">en attente</span> </td>
<td>  <a type="button" style="color:green"  data-toggle="modal"  data-target="#edit" ><span class="material-icons">create</span></a></td>
<td><a type="button" style="color:red" data-toggle="modal"  data-target="#delete" ><span class="material-icons">delete</span> </a></td>
<td></td>
<!-- delete -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/conge/{{$conge->id}}" method="POST">
                      @method('DELETE')
                      <div class="modal-body">
                    <p>voulez-vous vraiment supprimer Votre demande</p>  
                      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
        <button type="submit" class="btn btn-danger" onclick="md.showNotificationn('top','right')" >Oui</button>
      </div>
    </div>
    @csrf
   </form>
  </div>
</div>
  </div>





<!--  -->

<!-- editer -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modifier votre Demande de congé</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="/conge/{{$conge->id}}" method="POST">

@method('PUT')
<div class="form-group">
<label for="recipient-name" class="col-form-label">Type Conge   <b class="text-danger  ">*</b></label>

<p type="text" class="form-control" id="recipient-name" value="">{{$conge->typeconge->nom}}</p>

</div>
<div class="form-group">
<label for="recipient-name" class="col-form-label">date Debut  <b class="text-danger  ">*</b></label><br>
<input  name="datedebut" type="date" class="form-control" id="recipient-name" value="{{$conge->datedebut}}">
</div>
<div class="form-group">
<label for="recipient-name" class="col-form-label">Date Fin<b class="text-danger  ">*</b></label><br>
<input  name="datefin" type="date" class="form-control" id="recipient-name" value="{{$conge->datefin}}">
</div>

<div class="form-group">
<label for="message-text"   class="col-form-label">raison</label><br>

<textarea   name="raison" class="form-control" id="message-text">{{$conge->raison}}</textarea>
</div>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
<button type="submit" class="btn btn-success" onclick="md.showNotification('top','right')" >Ajouter</button>
@csrf
</form>
</div>
</div>
</div>
</div>
</div>


@elseif($conge->avis=='1'  )
<td> <span class="badge badge-success">accepte</span> </td>
<td>  <a  style="color:gray" disabled><span class="material-icons">create</span></a></td>
<td><a  style="color:gray" disabled><span class="material-icons">delete</span> </a></td>

<td>  <a style="color:green" href="/storage/cover_images/{{$conge->recu}}" download="{{$conge->recu}}"><span class="material-icons">get_app</span></a></td>


@else
<td><span class="badge badge-danger">Refusee</span> </td>
<td>  <a  style="color:gray" disabled><span class="material-icons">create</span></a></td>
<td><a  style="color:gray" disabled><span class="material-icons">delete</span> </a></td>
<td><button type="button" class="btn btn-outline-danger btn-round " data-toggle="modal"  data-target="#motif" >Voir plus <span class="badge badge-light">1</span> </button></td>@endif
</tr>






@endif
@endif

<!-- Motif -->

<div class="modal fade" id="motif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Votre Demande A ete refusee </label>
          
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Justification</label>
        
         
               <p>{{$conge->motifs}}</p>
            

              <p></p>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


@endforeach
@else
<td> <h5>Aucune demande</h5> </td>
@endif

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Effectuer Demande de conge</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="/conge" method="POST">
<div class="form-group">
<label for="recipient-name" class="col-form-label">Type Conge   <b class="text-danger  ">*</b></label>

<div class="col-md-12">
<select name="typeconge_id" id="cat" class="form-control">
@foreach($type as $type )
<option value="{{$type->id}}">{{$type->nom}}</option>

@endforeach

</select>

</div>
</div>
<div class="form-group">
<label for="recipient-name" class="col-form-label">date Debut  <b class="text-danger  ">*</b></label> <br>
<input  name="datedebut" type="date" class="form-control" id="recipient-name">
</div>
<div class="form-group">
<label for="recipient-name" class="col-form-label">Date Fin<b class="text-danger  ">*</b></label> <br>
<input  name="datefin" type="date" class="form-control" id="recipient-name">
</div>

<div class="form-group">
<label for="message-text"   class="col-form-label">raison</label>
<br>
<textarea   name="raison" class="form-control" id="message-text"></textarea>
</div>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
<button type="submit" class="btn btn-success" onclick="md.showNotification('top','right')" >Ajouter</button>
@csrf
</form>
</div>
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
  
  
  
  

@endsection