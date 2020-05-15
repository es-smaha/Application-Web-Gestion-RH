
@extends('layouts.nav2')
@section('title')
reclamation
@endsection
@section('content')





<!--  -->
<!-- edit -->


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
<hr>


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