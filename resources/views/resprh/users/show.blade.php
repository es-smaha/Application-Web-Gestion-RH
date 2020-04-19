@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<div class="col-md-12">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                <h6 class="card-category text-gray">{{$user->name}} {{$user->prenom}}</h6>
                <h3><span class="material-icons">settings_phone</span> 
                <small>{{$user->tele}}</small></h3>
                <h3 ><span class="material-icons">contact_mail</span>  &nbsp &nbsp {{$user->email}} </h3> 

                    <div class="row">
                   
                        <div class="col-6">
                 
                    <h3>Adresse Complete :   <small> {{$user->adress}}</small></h3>  
                    <h3>CNE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp    : <small>{{$user->cne}} </small></h3>
                    <h3>Matricule/KO   &nbsp &nbsp &nbsp  &nbsp :<small>{{$user->ko}} </small></h3>  
                    <h3>poste de travail &nbsp &nbsp &nbsp  :<small> {{$user->poste}}</small></h3>  
                  
                    </div>
                 
                  
                        <div class="col-6">
                  
                     
                    <h3>Service  &nbsp &nbsp &nbsp  &nbsp :  <small>{{$user->service_id}} </small></h3>  
                    <h3>Solde Congee : <small>{{$user->solde}} </small></h3>    
                    <h3>salaire   &nbsp &nbsp &nbsp  &nbsp :<small>{{$user->salaire}}</small></h3>
                    <h3>date Embauche:   :<small>{{$user->dateembauche}}</small></h3>
                     
                    </div>
                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                        <button class="btn btn-danger btn-round"  data-userid="{{$user->id}}" data-toggle="modal" data-target="#delete" >Delete</button>
                               
                     
                      
                        </div> 
                        <div class="col-6">
                        <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#edit" >Edit</button>
                            
                        </form>
                        </div> 
                 
                  </div>
                </div>
              </div>
            </div>
          









            <div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/user/{{$user->id}}" method="POST">
        @csrf
        @method('delete')
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="users_id" id="user_id" value="">
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>






<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="/edituser/{{$user->id}}" method="POST">
        @method('PUT')
        @csrf
            <div class="row">
            
            
            
            <div class="col-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <br>
            <input type="text"  name="nom" class="form-control" id="recipient-name" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prenom</label>
            <br>
            <input type="text"  name="prenom" class="form-control" id="recipient-name" value="{{$user->prenom}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Adress Complet</label>
            <br>
            <input type="text"  name="adress" class="form-control" id="recipient-name" value="{{$user->adress}}">
          </div>
    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CNE</label>
            <br>
            <input type="text"  name="cne" class="form-control" id="recipient-name" value="{{$user->cne}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Matricule/ko</label>
            <br>
            <input type="text"  name="ko" class="form-control" id="recipient-name" value="{{$user->ko}}">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Poste de Travail</label>
            <br>
            <input type="text"  name="poste" class="form-control" id="recipient-name" value="{{$user->poste}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">service</label>
            <br>
            <input type="text"  name="service" class="form-control" id="recipient-name" value="{{$user->service}}">
          </div>
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
            <div class="col-6">
          
           
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">solde</label>
            <br>
            <input type="text"  name="solde" class="form-control" id="recipient-name" value="{{$user->solde}}" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">salaire</label>
            <br>
            <input type="text"  name="salaire" class="form-control" id="recipient-name" value="{{$user->salaire}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date Embauche</label>
            <br>
            <input type="text"  name="dateembauche" class="form-control" id="recipient-name" value="{{$user->dateembauche}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telephone</label>
            <br>
            <input type="text"  name="tele" class="form-control" id="recipient-name" value="{{$user->tele}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <br>
            <input type="text"  name="email" class="form-control" id="recipient-name" value="{{$user->email}}">
          </div>      
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">User Type</label>
            <br>
            <input type="text"  name="usertype" class="form-control" id="recipient-name" value="{{$user->usertype}}">
          </div>
          <button type="submit" class="btn btn-success">save</button>
          </div>
          </div>
    
     
          
        </form>
      </div>
     
    </div>
  </div>
</div>


@endsection

@section('scripts')

@endsection
