@extends('layouts.nav3')
@section('title')

@endsection

@section('content')
<div class="container">
<div class="card-header">Planning</div>
<div class="card-body">


</form>
<table id="example" class="table">
<thead>
<tr>
<th>Agent</th>
<th>lundi</th>
<th>Mardi</th>
<th>mercredi</th>
<th>vendredi</th>
<th>jeudi</th>
<th>Samedi</th>
<th>Dimanche</th>
</tr>
</thead>
<tbody>
@foreach($data as $data)
<tr>
<td>{{$data->user}}</td>
<td>{{$data->lundi}}</td>
<td>{{$data->mardi}}</td>
<td>{{$data->mercredi}}</td>
<td>{{$data->jeudi}}</td>
<td>{{$data->vendredi}}</td>
<td>{{$data->samedi}}</td>
<td>{{$data->dimanche}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} )
</script>



@endsection
