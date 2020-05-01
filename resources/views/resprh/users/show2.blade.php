@extends('layouts.nav2')
@section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
               
                </div>
                <div class="card-body">
                <form  action="/edituser/{{$user->id}}" method="POST">
        @method('PUT')
        @csrf
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom</label>
                           <input type="text"  name="nom" class="form-control" id="recipient-name" value="{{$user->name}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prenom</label>
                   
            <input type="text"  name="prenom" class="form-control" id="recipient-name" value="{{$user->prenom}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">CNSS</label>
                   
                          <input type="text"  name="cne" class="form-control" id="recipient-name" value="{{$user->cne}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">KO</label>
                   
                          <input type="text"  name="ko" class="form-control" id="recipient-name" value="{{$user->ko}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email </label>
                     
            <input type="text"  name="email" class="form-control" id="recipient-name" value="{{$user->email}}">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> telephone</label>
                          <input type="text"  name="tele" class="form-control" id="recipient-name" value="{{$user->tele}}">
                        </div>
                      </div>
        
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fonction</label>
                          <input type="text"  name="poste" class="form-control" id="recipient-name" value="{{$user->poste}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> ChefHiearchique </label>
                          <input type="text"  name="kochef" class="form-control" id="recipient-name" value="{{$user->kochef}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Solde conge</label>
                          <input type="number"  name="solde" class="form-control" id="recipient-name" value="{{$user->solde}}" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jours Consommee</label>
                          <input type="text"  name="salaire" class="form-control" id="recipient-name" value="{{$user->jour}}">
                        </div>
                      </div>
                    </div>
                    <br>
                     
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">date Embauche</label>
                          <input type="date"  name="dateembauche" class="form-control" id="recipient-name" value="{{$user->dateembauche}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Service</label>
                          <select name="service_id" id="service" class="form-control">
                                @foreach($services as $services )
                                    <option value="{{$services->id}}">{{$services->nom}}</option>

                                @endforeach
                                </select>
                        </div>
                      </div>
                    </div>
                 
                   
                    <button type="submit" class="btn btn-success pull-right" onclick="md.showNotification('top','center')" >Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                  <img class="img" src="/storage/cover_images/{{$user->image}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{$user->poste}} </h6>
                  <h4 class="card-title">{{$user->name}} {{$user->prenom}}</h4>
                  <h4 class="card-title">Solde Conge: {{$user->solde}}</h4>
                  
                  <a href="javascript:;" class="btn btn-success btn-round">Profil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




@endsection