
@extends('layouts.nav4')


@section('title')
Calendar
@endsection

@section('content')




<!-- modifier un evenement -->




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
                add event
        </div>
        <div class="modal-body">
        <h1>task: add data</h1>
        <form method="POST" action="/events">
        @csrf
        <label for="">enter name of event</label>
        <input type="text" class="form-control" name="title" placeholder="enter the name"/> <br> <br>
        <label for="">enter color</label>
        <input type="color" class="form-control" name="color" placeholder="enter the color"/> <br> <br>
        <label for="">enter start date of event</label>
        <input type="datetime-local" class="form-control" name="start_date" placeholder="enter the name"/> <br> <br>
        <label for="">enter end date of event</label>
        <input type="datetime-local" class="form-control" name="end_date" placehol der="enter the name"/>
        <br> <br>
        <input type="submit" name="submit" class="btn btn-primary" value="add event data">
        </form>
        </div>
        </div>
    </div>
  </div>
</div>
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

</table>
        </div>
    </div>
  </div>
</div>

<div class="container">
<div class="jumbotron">
<h2>Calendrier Congee Par Service</h2>
<div class="row">
<a type="button" class="btn btn-warning" data-toggle="modal"  data-target="#exampleModal" >Ajouter un evenement</a> 
<a type="button" class="btn btn-warning" data-toggle="modal"  data-target="#mod" > Consulter les conges</a>
<a type="button" class="btn btn-warning" href="/deleteevent" > Consulter les conges</a>
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
     
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
               Full calendar
            </div>
        </div>
            </div>
                </div>
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
