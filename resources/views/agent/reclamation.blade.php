
@extends('layouts.nav4')
@section('title')
reclamation
@endsection
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="card card-profile">
<div class="card-avatar">

  <img class="img" src="data:image/png;base64,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" />
</a>
</div>
<div class="card-body">
<h6 class="card-category text-gray">Suggestion/reclamation</h6>
<form action="/reclamation" method="Post">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Titre</label>
<input  name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>
<div class="form-group">
<label for="exampleInputEmail1">Contenu</label>


<textarea name="description"  name="raison" class="form-control" id="message-text"></textarea>
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">

</div>
<button type="submit" class="btn btn-success">Deposer</button>
</form>
</div>
</div>

</div>

</div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="card">

<div class="card-header card-header-success">
<h4 class="card-title">Zone de Systeme de suggestions et reclamations</h4>
</div>

<div class="card-body table-responsive" >
<button type="button" class="btn btn-white" data-toggle="modal"  data-target="#exampleModal" ><span class="material-icons">add_circle</span>Ajouter une reclamation</button> </tr>
</div>

<!-- <a  href="#exampleModal" ><span class="material-icons">add_circle</span>Ajouter une reclamation</a> -->

</div>
</div>



@if(count($rec)>0)

@foreach($rec as $rec)
<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<form  action="/reclamation/{{$rec->id}}" method="POST">
@csrf
@method('delete')
<div class="modal-body">
<p>are you sure you wanna delete</p>
<input type="hidden" name="users_id" id="user_id" value="">
</div>

<div class="modal-footer">
<button type="button" class="btn btn-orange" data-dismiss="modal">No</button>
<button type="submit" class="btn btn-success">yes</button>
</div>

</form>
</div>

</div>
</div>


<!--  -->
<!-- edit -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifer la reclamation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form  action="/reclamation/{{$rec->id}}" method="POST">
       @method("PUT")
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" value ="{{$rec->titre}}" name="titre" class="form-control" id="nom">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" value ="{{$rec->description}}" name="description" class="form-control" id="nom">
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
<!--  -->


<div class="card">

<div class="card-body ">
<h6 class="card-category text-danger">
<i class="material-icons">trending_up</i> {{$rec->titre}}
</h6>
<br>
<h4 class="card-title">
<p style="font-size:20px">{{$rec->description}}</p>

</h4>
</div>
 
<div class="card-footer ">

<div class="author">
<a href="#pablo">
<img src="/storage/cover_images/{{$rec->user->image}}" alt="..." class="avatar img-raised">
<span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span>
<span>{{$rec->created_at}} {{$rec->created_at->diffforHumans()}}</span>
</a>
</div>
  
<div class="stats ml-auto">

@if(!auth::guest())

<button type="button" data-toggle="modal"  data-target="#edit" rel="tooltip" title="Edit Task" class="btn btn-success btn-link btn-sm">
  <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip"data-toggle="modal"  data-target="#delete" title="Remove" class="btn btn-danger btn-link btn-sm">
  <i class="material-icons">close</i>
</button></td>
</div>
</div></div>
@comments(['model' => $rec])
@endif

@endforeach
<hr>
{{$pages}} 
 
<div class="pages">
<ul class="pagination ">

</ul>
</div>

<nav aria-label="...">
</nav>


<!--delete  -->




@endif




@endsection


@section('scripts')
<script>
$(document).ready(function() {
$('#data').DataTable();
} );
</script>
<script>
$('#delete').on('show.bs.model',function(event{
var  button=$(event.relatedTarget)
var user_id=button.data('userid')
var modal=$(this)
modal.find('.modal-body #user_id').val(user_id)




}));

@endsection