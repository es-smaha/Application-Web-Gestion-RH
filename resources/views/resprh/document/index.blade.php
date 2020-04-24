@extends('layouts.nav2')
@section('title')
documents administratifs
@endsection

@section('content')
<div class="content">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> Les demandes Non-Valide</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead class=" text-primary">
<th>
Nom D'agent
</th>
<th>
Type de document
</th>
<th>
la date de demande
</th>
<th >
valider
</th>

</thead>
<tbody>

@foreach($demandedocuments as $demandedocuments)

<tr>
<td> {{$demandedocuments->user->name}}</td>
<td> {{$demandedocuments->typedocument->name}}</td>
<td> {{$demandedocuments->created_at}}</td>
<td>
<form action="{{url('docum/'.$demandedocuments->id)}}" method="POST">
@csrf
@method("PUT")
<button class="btn btn-red" type=submit>valider la demande</button>
</form>
</td>

</tr>

@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
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