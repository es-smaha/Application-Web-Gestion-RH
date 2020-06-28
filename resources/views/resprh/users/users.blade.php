@extends('layouts.nav2')
@section('title')

@endsection

@section('content')

<div class="container-fluid">

<button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons">
perm_identity
</span>Ajouter Agents</button>
      <a href="/administration" class="btn btn-success btn-round"><span class="material-icons">settings</span>Configuration</a>
      <a href="/absence" class="btn btn-success btn-round"><span class="material-icons">settings</span>Liste D'absence</a>
      <div class="dropdown show">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter par service
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a href="/users" class="dropdown-item" >     tous </a>
  @foreach(App\Service::all() as $service)
 
  <option class="dropdown-item" id="cat{{$service->id}}" value="{{$service->id}}">{{$service->nom}}</option>
      
      @endforeach
   
    
    
  </div>


    <div id="usersparservice">
    <div class="row">
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
                                    <a href="/users/{{$user->id}}" class="btn btn-success btn-sm" >
                                <span class="material-icons">  remove_red_eye</span>   </a>
                             
                                   <button data-ko="{{$user->ko}}" data-name="{{$user->name}}" data-user_id="{{$user->id}}" type="button" rel="tooltip"  data-target="#delete" data-toggle="modal"  title="Remove" class="btn btn-info  btn-sm">
                                <i  class="material-icons" >close</i>
                              </button>
                                
                              </div>
                              </div>
                              </td>
                   

                        </tr>

    </div>    
  


    @endforeach
                    
                       
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
            
           </div>
 
<!-- supprimer agents -->



<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/users"  method="POST">
        @csrf
     
        <div class="modal-body">
            
          <input type="hidden" name="user_id" id="user_id" value="">
          
        </div>
          <div class="modal-footer">
          <p>voulez-vous vraiment supprimer  </p>  <span class="badge badge-warning">  <h4></h4></span>?
        <button type="button" class="btn btn-orange btn-sm" data-dismiss="modal">No</button>
        <button onclick="md.showNotificationn('top','right')"  type="submit" class="btn btn-success btn-sm">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>





<!-- Ajouter Agent -->

<div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Collaborateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form  action="/save-agents" method="POST" enctype="multipart/form-data">
      
        @csrf
            <div class="row">
            
            
            
            <div class="col-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Name') }}</label>
            <br>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name" required>
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('prenom') }}</label>
            <br>
            <input type="text"  name="prenom" class="form-control  @error('prenom') is-invalid @enderror" id="recipient-name"   required>
          
            @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('sexe') }}</label>
            <br>
            <select name="sexe" id="sexe" class="form-control">
                                     <option value="0">femme</option>
                                    <option value="1">homme</option>
                               
                                </select>
            @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('situation familiale') }}</label>
            <br>
            <select name="situation" id="situation" class="form-control">
                                     <option value="mariée">mariée</option>
                                    <option value="celibataire">celibataire</option>
                               
                                </select>
            @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('cne') }}</label>
            <br>
            <input type="text"  name="cne" class="form-control @error('cne') is-invalid @enderror" name="cne"  id="recipient-name" required>
            @error('cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Ko/chefHierarchique') }}</label>
            <br>
            <input type="text"  name="kochef" class="form-control @error('kochef') is-invalid @enderror" id="recipient-name" required>
            @error('kochef')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
    
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('matricule /ko') }}</label>
            <br>
            <input type="text"  name="ko" class="form-control @error('ko') is-invalid @enderror" id="recipient-name" required>
            @error('ko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         
          </div>
          
      
         
          
        
          </div>


            <div class="col-6">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label @error('tele') is-invalid @enderror">{{ __('télèphone') }}</label>
            <br>
            <input type="text"  name="tele" class="form-control" id="recipient-name" required>
            @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">{{ __('poste') }}</label>
            <br>
            
            <input type="text"  name="poste" class="form-control @error('poste') is-invalid @enderror" id="recipient-name" required>
            @error('poste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             
          
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Date Embauche') }}</label>
            <br>
            <input type="date"  name="dateembauche" class="form-control @error('dateembauche') is-invalid @enderror" id="recipient-name" required>
            @error('dateembauche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('Service') }}</label>
            <br>
            <select name="service_id" id="service" class="form-control">
                                @foreach($services as $service )
                                    <option value="{{$service->id}}">{{$service->nom}}</option>

                                @endforeach
                                </select>
          </div>
           
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('soldeCongé') }}</label>
            <br>
            <input type="number"  name="solde" class="form-control @error('solde') is-invalid @enderror" id="recipient-name"  required>
            @error('solde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          
          </div>

       
          
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">{{ __('E-Mail Address') }}</label>
            <br>
            <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" id="recipient-name" required>
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
         
          
          <button type="submit" class="btn btn-success"  onclick="md.showNotificatio('top','center')">
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

    <script>
    $('#delete').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var name= button.data('name')
     var ko= button.data('ko')
     var user_id= button.data('user_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation de suppresion');
     modal.find('h4').text(ko);
     modal.find('.modal-body #name').val(name);
     modal.find('.modal-body #user_id').val(user_id);




    })
    
    
    
    </script>
    <script>$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
  </script>

  
@endsection