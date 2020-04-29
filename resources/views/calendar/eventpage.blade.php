@extends('layouts.nav1')
@section('title')

@endsection

@section('content')

<!-- Ajouter un evenement -->
<div class="container">
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













<div class="container">
<div class="jumbotron">
<h2>Event calendar [Full-Calendar]</h2>
<div class="row">
<a type="button" class="btn btn-success" data-toggle="modal"  data-target="#exampleModal" >Ajouter un evenement</a> 


<a type="button" class="btn btn-danger" href="/display" > Modifer un evenement</a>

<a type="button" href="/deleteevent"  class="btn btn-primary">supprimer un evenement</a>
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
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #2e6da4; color:white;">
                Event full calendar
                </div>
                <div class="psnel-bodt">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
                </div>
            
            </div>
        </div>
        </div>
    </div>
</div>




<!-- modifier un evenement -->










<!-- supprimer un evenement -->
<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="" method="POST">
        <!-- @csrf
        @method('delete') -->
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="users_id" id="user_id" value="">
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-orange" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
