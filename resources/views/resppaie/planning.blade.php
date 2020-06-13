@extends('layouts.nav3')
@section('title')
planning
@endsection
@section('content')
<h4>Plannind de travail </h4>
<br>
<table id="example" class="table">
<thead class="thead-dark">
<tr>
<th>Agent</th>
<th>lundi</th>
<th>Mardi</th>
<th>mercredi</th> <th>jeudi</th>
<th>vendredi</th>

<th>Samedi</th>
<th>Dimanche</th>
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