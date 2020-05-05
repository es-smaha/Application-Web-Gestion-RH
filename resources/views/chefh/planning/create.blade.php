@extends('layouts.nav1')
@section('title')

@section('title')
Planning
@endsection

@section('content')
<div class="container">
<div >Planning</div>
<div class="card-body">
<div class="row">
<div class="col-4">
<a href="/export" class="btn btn-success">Exporter XLSX</a></div>
<div class="col-4">
<form action="/import" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="import_file">

<input type="submit" name="import" value="import" class="btn btn-success" >
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
@forelse($data as $data)
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
@empty
<tr><td>No Data</td></tr>
@endforelse
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