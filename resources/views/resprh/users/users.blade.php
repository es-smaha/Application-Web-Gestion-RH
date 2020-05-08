@extends('layouts.nav2')
@section('title')

@endsection

@section('content')

<div class="container-fluid">

<button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons">
perm_identity
</span>Ajouter Agents</button>
      <a href="/admi" class="btn btn-success btn-round"><span class="material-icons">settings</span>Configuration</a>
      <div class="dropdown show">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter par service
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  @foreach(App\Service::all() as $service)
  <option class="dropdown-item" id="cat{{$service->id}}" value="{{$service->id}}">{{$service->nom}}</option>
      
      @endforeach
   
    
    
  </div>
</div>


    <div id="usersparservice">
    </div>    
  



<!-- supprimer agents -->



       












<!-- Ajouter Agent -->

<div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-header">{{ __('Register') }}</div>
      <div class="modal-body">
        <form  action="/save-agents" method="POST" enctype="multipart/form-data">
      
        @csrf
            <div class="row">
            
            
            
            <div class="col-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Name') }}</label>
            <br>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name" >
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('prenom') }}</label>
            <br>
            <input type="text"  name="prenom" class="form-control  @error('prenom') is-invalid @enderror" id="recipient-name">
          
            @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('cne') }}</label>
            <br>
            <input type="text"  name="cne" class="form-control @error('cne') is-invalid @enderror" name="cne"  id="recipient-name" >
            @error('cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Ko/chefHierarchique') }}</label>
            <br>
            <input type="text"  name="kochef" class="form-control @error('kochef') is-invalid @enderror" id="recipient-name" >
            @error('kochef')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
    
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('matricule /ko') }}</label>
            <br>
            <input type="text"  name="ko" class="form-control @error('ko') is-invalid @enderror" id="recipient-name" >
            @error('ko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         
         
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">{{ __('poste') }}</label>
            <br>
            
            <input type="text"  name="poste" class="form-control @error('poste') is-invalid @enderror" id="recipient-name" >
            @error('poste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             
          
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label @error('tele') is-invalid @enderror">{{ __('tele') }}</label>
            <br>
            <input type="text"  name="tele" class="form-control" id="recipient-name" >
            @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
         
          
        
          </div>


            <div class="col-6">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Date Embauche') }}</label>
            <br>
            <input type="date"  name="dateembauche" class="form-control @error('dateembauche') is-invalid @enderror" id="recipient-name" >
            @error('dateembauche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Nom service') }}</label>
            <br>
            <select name="service_id" id="service" class="form-control">
                                @foreach($services as $service )
                                    <option value="{{$service->id}}">{{$service->nom}}</option>

                                @endforeach
                                </select>
          </div>
           
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('solde') }}</label>
            <br>
            <input type="number"  name="solde" class="form-control @error('solde') is-invalid @enderror" id="recipient-name"  >
            @error('solde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>

       
          
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('E-Mail Address') }}</label>
            <br>
            <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" id="recipient-name" >
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          
          </div>      
            

          <!--<div class="form-group ">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        


                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">{{ __('Confirm') }}</label>
                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>-->
                          
                            
  <div class="file-field">
    
  <label for="image" class="col-form-label">{{ __('image') }}</label> 
      <input type="file" name="image" class="form-control">
  
   
  </div>

                            

          </div>
          </div>
         
          
          <button type="submit" class="btn btn-success"  onclick="md.showNotification('top','center')">
                                    {{ __('Add Agent') }}
                                </button>
     
          
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
   $("#cat{{$service->id}}").click(function(){
    var cat=$("#cat{{$service->id}}").val();
   
        $.ajax({
          type:'get',
          dataType:'html',
          url:'{{url('/usersservice')}}',
          data:'cat_id='+cat,
          success:function(response){
           console.log(response);
           $("#usersparservice").html(response);
          }
        });
   });
      @endforeach
  
    



  });
  
  
  
  </script>
@endsection