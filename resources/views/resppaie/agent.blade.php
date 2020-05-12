@extends('layouts.nav3')
@section('title')

@endsection

@section('content')

<div class="container-fluid">

     
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter par service
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  @foreach(App\Service::all() as $service)
  <option class="dropdown-item" id="service{{$service->id}}" value="{{$service->id}}">{{$service->nom}}</option>
      
      @endforeach
   
    
    
  </div>


  <div id="service"></div>
  
<!-- supprimer agents -->



       












<!-- Ajouter Agent -->
  </div>


@endsection

@section('scripts')
  
  <script>
  
  $(document).ready(function(){
   //get cat
   @foreach(App\Service::all() as $service)
   $("#service{{$service->id}}").click(function(){
    var cat=$("#service{{$service->id}}").val();
   
        $.ajax({
          type:'get',
          dataType:'html',
          url:'{{url('/usersservice')}}',
          data:'cat_id='+cat,
          success:function(response){
           console.log(response);
           $("#service").html(response);
          }
        });
   });
      @endforeach
  
    



  });
  
  
  
  </script>
@endsection