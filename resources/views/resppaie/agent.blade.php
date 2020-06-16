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


  <div id="service"><div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                <div class="sectiontitle">
    <h2 style="color:white; font-size:35px">La liste des Collaborateurs</h2>
    
</div>
               
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead class=" text-primary">
                            <th>Matricule</th>
                              <th>Image</th>
                        <th>
                       Nom complet
                        </th>
                     
                        <th>
                        Date Embauche
                        </th>
                        <th>
                     Service
                        </th>
                      
                        <th>
                      Superviseur
                        </th>
                      
                        <th>
                      
                       Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($user as $user)
                        <tr>
                        <td>{{$user->ko}}</td>
                              <td> <div class="author">
                             <a href="#pablo">
                                <img src="/storage/cover_images/{{$user->image}}" alt="..." class="avatar img-raised">
                                                         </a>
                                         </div></td>
                            <td>{{$user->prenom}} {{$user->name}}</td>
                            <td>{{$user->dateembauche}}</td>
                            <td>{{$user->servicee}}</td>
                           
                               <td>{{$user->kochef}}</td> 
                                
                                <td>  <div class="row">
                                  <div class="text-right">
                                    <a href="/liste-agent/{{$user->id}}" class="btn btn-success btn-sm" >
                                <span class="material-icons">  remove_red_eye</span>   </a>
                             
                                   <!-- <button data-ko="{{$user->ko}}" data-name="{{$user->name}}" data-user_id="{{$user->id}}" type="button" rel="tooltip"  data-target="#delete" data-toggle="modal"  title="Remove" class="btn btn-info  btn-sm"> -->
                                <!-- <i  class="material-icons" >close</i> -->
                              <!-- </button> -->
                                
                              </div>
                              </div>
                              </td>
                   

                        </tr>

    </div>    
  


    @endforeach
    </div>
  
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
          url:'{{url('/usersservice2')}}',
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