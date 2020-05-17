
@extends('layouts.nav2')
@section('title')
reclamation
@endsection
@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Systeme Suggestion</a></li>
    <li class="breadcrumb-item active" aria-current="page"> </li>
  </ol>
</nav>


<div class="col-lg-12 col-md-12">
<div class="card">

<div class="card-header card-header-success">
<h4 class="card-title">Zone de Systeme de suggestions et reclamations</h4>
</div>
<div class="card-body table-responsive" >

</div>

<!-- <a  href="#exampleModal" ><span class="material-icons">add_circle</span>Ajouter une reclamation</a> -->

</div>
</div>



@if(count($rec)>0)
@foreach($rec as $rec)

@if($rec->etat==true)
<div class="card ">
  <div >
    <p class="bg-warning " style="float:right"><span class="material-icons ">
new_releases
</span> nouveau</p>
</div>
<div class="card-body ">
<h6 class="card-category text-danger">
<i class="material-icons">trending_up</i>   {{$rec->titre}}

</h6>
<h4 class="card-title">
<a href="">{{$rec->description}}</a>
</h4>
</div>

<div class="card-footer ">

<div class="author">
<a href="">
<img src="/storage/cover_images/{{$rec->user->image}}" alt="..." class="avatar img-raised">
<span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span>
<span>{{$rec->created_at}} {{$rec->created_at->diffforHumans()}}</span>
</a>
</div>

<div class="stats ml-auto">
<a href="/Show-suggestion/{{$rec->id}}"  class="btn btn-warning btn-sm">
<span class="material-icons">reply</span>
</a>

  </div>
  </div>
    </div>

@else
<div class="card ">
 
<div class="card-body ">
<h6 class="card-category text-danger">
<i class="material-icons">trending_up</i>   {{$rec->titre}}

</h6>
<h4 class="card-title">
<a href="">{{$rec->description}}</a>
</h4>
</div>

<div class="card-footer ">

<div class="author">
<a href="">
<img src="/storage/cover_images/{{$rec->user->image}}" alt="..." class="avatar img-raised">
<span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span>
<span>{{$rec->created_at}} {{$rec->created_at->diffforHumans()}}</span>
</a>
</div>

<div class="stats ml-auto">
<a href="/Show-suggestion/{{$rec->id}}"  class="btn btn-warning btn-sm">
<span class="material-icons">reply</span>
</a>

  </div>
  </div>
    </div>
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
  $(document).ready(function(){
  $(".new").click(function(){
    $(".new").remove();
  });
});
  
  
  </script>

  
@endsection