
@extends('layouts.nav2')
@section('title')
reclamation
@endsection
@section('content')





<!--  -->
<!-- edit -->
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Systeme Suggestion</a></li>
    <li class="breadcrumb-item active" aria-current="page">details </li>
  </ol>
</nav>

<div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">          <div class="icon icon-rose">
		<i class="material-icons">group_work</i> Systeme de Suggestions et Reclamations</div></h4>
      
                <p class="card-category">
                  
                </p>
              </div>
    </div>
    <hr>
        <div class="row">
                <div class="col-8">
                <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">          <div class="icon icon-rose">
                <span class="material-icons">emoji_objects</span> Solutions/Propositions</div></h4>
      
                <p class="card-category">
                  
                </p>
              </div>
    </div>
        
<div class="card">

<div class="card-body ">
<h6 class="card-category text-danger">
<i class="material-icons">trending_up</i>  {{$rec->titre}}>
</h6>
<h4 class="card-title">
<a href="#pablo">{{$rec->description}}</a>
</h4>
</div>

<div class="card-footer ">

<div class="author">
<a href="#pablo">
<img src="/storage/cover_images/{{$rec->user->image}}" alt="..." class="avatar img-raised">
<span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span>
<span> {{$rec->created_at->diffforHumans()}}</span>
</a>
</div>

<div class="stats ml-auto">


        </div>
            </div>
                </div>
 
                <div id="comment">
@comments(['model' => $rec])
</div>

</div>
    <div class="col-4">
    <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">          <div class="icon icon-rose">
		<i class="material-icons">person</i> Information sur l'employee</div></h4>
      
                <p class="card-category">
                  
                </p>
              </div>
    </div>
         <br>
    <div class="card card-profile">


<div class="card-body">
<div class="card-avatar">
<a href="javascript:;">
  <img class="img" src="/storage/cover_images/{{Auth()->user()->image}}" />
</a>
</div>
<div class="row">
<div class="col-6">
      <div class="form-group">
    <label for="nom">Nom complet:</label>
      <span>{{$rec->user->name}} {{$rec->user->prenom}}</span>
  </div>
  <div class="form-group">
    <label for="nom">Matricule_____ :</label>
      <span>{{$rec->user->ko}} </span>
      </div>
      <div class="form-group">
    <label for="nom">Service :</label>
      <span>{{$rec->user->kochef}}</span>
      </div>
      <div class="form-group">
    <label for="nom">Service__: </label>
      <span>{{$rec->user->service_id}}</span>
      </div>
      <div class="form-group">
    <label for="nom">poste Occupee: </label>
      <span>{{$rec->user->poste}}</span>
      </div>


</div>

<div class="col-6">
<div class="form-group">
    <label for="nom">Telephone :</label>
      <span>{{$rec->user->tele}}</span>
      </div>

      <div class="form-group">
    <label for="nom">email____ :</label>
      <span>{{$rec->user->email}}</span>
      </div>
      <div class="form-group">
    <label for="nom">SEXE :</label>
      <span class="badge badge-success">{{$rec->user->solde}}</span>
      </div>
      <div class="form-group">
    <label for="nom">Situation familiale :</label>
      <span class="badge badge-success">{{Auth()->user()->jour}}</span>
      </div>
      <div class="form-group">
    <label for="nom">date Embauche :</label>
      <span>{{$rec->user->dateembauche}}</span>
      </div>

    
</div>



</div>

      <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"> edit</button>

</div>
</div>
</div>

    
    
    
    
    </div>

</div>

@endsection


@section('scripts')
<script>
$(document).ready(function() {
$('#hide').click(function({
$('#comment').hide();

}));

$('#show').click(function({
$('#comment').show();

}));



} );
</script>



  
@endsection