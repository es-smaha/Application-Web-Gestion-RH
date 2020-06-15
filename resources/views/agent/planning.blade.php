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
<th>Nom </th>
<th>Prenom</th>
<th>Matricule</th>
<th>Service</th>
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
<td>{{$data->nom}}</td>
<td>{{$data->prenom}}</td>
<td>{{$data->matricule}}</td>
<td>{{$data->service}}</td>
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




@endsection