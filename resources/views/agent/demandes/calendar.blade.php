
@extends('layouts.nav4')


@section('title')
Calendrier
@endsection

@section('content')




<!-- modifier un evenement -->





<div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
               Liste Congees
        </div>
        <div class="modal-body">
        
<table id="example" class="table table-striped table-bordered table-hover">
<thead class="thead">
<tr class="warning">
<th>ID</th>
<th>Nom</th>
<th>Type de conge</th>
<th>date de debut</th>
<th>date de fin</th>
  <th>Delete</th>
</tr>
</thead>
@if(count($conges)>0)
@foreach($conges as $conges)
@if($conges->avis==1)
<tbody>
<tr>
<td>{{$conges->id}}</td>
<td>{{$conges->user->name}}</td>
<td>{{$conges->typeconge->nom}}</td>
<td>{{$conges->datedebut}}</td>
<td>{{$conges->datefin}}</td>
  <td> <form  action="/delete/{{$conges->id}}" method="POST">
        @csrf
        @method('delete')
        <td> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <span class="material-icons">delete</span></button></td>
        
          
        </form></td>
</tr>

</tbody>

@endif
@endforeach
@endif

</table>
        </div>
    </div>
  </div>
</div>

<div class="container">
<div class="jumbotron">

<div class="row">
        <div class="col-md-12 col-md-offset-4">
     
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <div class="row">
              <div class="col-2">
              <p>Congé Refusé</p>
            <div class="progress">
              
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
  <div class="col-2">
              <p>Congé En attente </p>
            <div class="progress">
              
            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
    <div class="col-2">
    <p>Congé Accepté</p>
<div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
            </div>
        </div>
            </div>
                </div>

<br> <br>



    
    @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
  
      
        <div class="row">
        <div class="col-md-12 col-md-offset-4">
     
   
                <div class="psnel-bodt">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
                </div>

            </div>
        </div>
        </div>
    </div>










@endsection

@section('scripts')


@endsection
