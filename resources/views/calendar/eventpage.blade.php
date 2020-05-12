
@extends('layouts.nav1')


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
  @foreach(App\Service::all() as $service)
  <option class="dropdown-item" id="calendar{{$service->id}}" value="{{$service->id}}">{{$service->nom}}</option>
      
      @endforeach
   
  </div>
  <br>
  <div id="calendar"></div>


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
