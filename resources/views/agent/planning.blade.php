@extends('layouts.nav4')
@section('title')
planning
@endsection
@section('content')
<h4>Plannind de travail </h4>
<br>
<table id="example" class="table table-bordered ">
<thead class="thead-dark">
<tr>
<th scope="col">Agent</th>
<th scope="col">lundi</th>
<th scope="col">Mardi</th>
<th scope="col">mercredi</th>
<th scope="col">vendredi</th>
<th scope="col">jeudi</th>
<th scope="col">Samedi</th>
<th scope="col">Dimanche</th>
</tr>
</thead>
<tbody class="thead-light">
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
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} )
</script>



@endsection