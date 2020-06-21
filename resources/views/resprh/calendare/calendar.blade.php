
@extends('layouts.nav2')


@section('title')
Calendar
@endsection

@section('content')


<!-- Ajouter un evenement -->
<div class="container">
<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter par service
  </a>
   
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a href="/cal" class="dropdown-item" >     tous </a>
  @foreach(App\Service::all() as $service)
  <option class="dropdown-item" id="calendar{{$service->id}}" value="{{$service->id}}">{{$service->nom}}</option>
      
      @endforeach 
   
  </div>
  <br>
  <div id="calendar">

  <div class="container">
<div class="jumbotron">
<h1 class="text-center">Calendrier Congée Par Service</h1>
<div class="row">
<!-- <a type="button" class="btn btn-warning" data-toggle="modal"  data-target="#exampleModal" >Ajouter un evenement</a>  -->
<a type="button" class="btn btn-warning" data-toggle="modal"  data-target="#mod" > Consulter les Congées</a>
<!-- <a type="button" class="btn btn-warning" href="/deleteevent" > Consulter les conges</a> -->
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

<script>
  
  $(document).ready(function(){
   //get cat
   @foreach(App\Service::all() as $service)
   $("#calendar{{$service->id}}").click(function(){
    var cat=$("#calendar{{$service->id}}").val();
   
        $.ajax({
          type:'get',
          dataType:'html',
          url:'{{url('/calendarajax')}}',
          data:'cat_id='+cat,
          success:function(response){
           console.log(response);
           $("#calendar").html(response);
          }
        });
   });
      @endforeach
  
    



  });
  
  
  
  </script>
@endsection
