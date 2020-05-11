@extends('layouts.nav3')
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
                          <label style="font-size:15px">Nom</label>
                            <br>
                           <input type="text"  name="name" class="form-control" id="recipient-name" value="{{$user->name}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Prenom</label>
                    <br>
            <input type="text"  name="prenom" class="form-control" id="recipient-name" value="{{$user->prenom}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label  style="font-size:15px" class="bmd-label-floating">CNSS</label>
                    <br>
                          <input type="text"  name="cne" class="form-control" id="recipient-name" value="{{$user->cne}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">KO</label>
                            <br>
                          <input type="text"  name="ko" class="form-control" id="recipient-name" value="{{$user->ko}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label  style="font-size:15px" class="bmd-label-floating">Email </label>
                      <br>
            <input type="text"  name="email" class="form-control" id="recipient-name" value="{{$user->email}}">
                        </div>
                      </div>
                    
                    <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating"> telephone</label>
                            <br>
                          <input type="text"  name="tele" class="form-control" id="recipient-name" value="{{$user->tele}}">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">date Embauche</label>
                            <br>
                          <input type="date"  name="dateembauche" class="form-control" id="recipient-name" value="{{$user->dateembauche}}">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Fonction</label>
                         <br>
                          <input type="text"  name="poste" class="form-control" id="recipient-name" value="{{$user->poste}}">
                        
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating"> ChefHiearchique </label>
                            <br>
                          <input type="text"  name="kochef" class="form-control" id="recipient-name" value="{{$user->kochef}}">
                        </div>
                          </div>
                          <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Service</label>
                            <br>
                          <select name="service_id" id="service" class="form-control">
                                @foreach($services as $services )
                                    <option value="{{$services->id}}">{{$services->nom}}</option>

                                @endforeach
                                </select>
                        </div>
                      </div>
               
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Solde conge</label>
                            <br>
                          <input type="number"  name="solde" class="form-control" id="recipient-name" value="{{$user->solde}}" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Jours Consommee</label>
                            <br>
                          <input type="text"  name="salaire" class="form-control" id="recipient-name" value="{{$user->jour}}">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Type user </label>
                            <br>
                              @if($user->usertype=='1')
                             <input type="text"  name="salaire" class="form-control" id="recipient-name" value="Chef Hierarchique">
                              @elseif($user->usertype=='2')
                              <input type="text"  name="salaire" class="form-control" id="recipient-name" value="Responsable Rh">
                              @elseif($user->usertype=='3')
                              <input type="text"  name="salaire" class="form-control" id="recipient-name" value="responsable de paie">
                              @elseif($user->usertype=='0')
                              <input type="text"  name="salaire" class="form-control" id="recipient-name" value="Agent">
                              @endif
                        </div>
                      </div>
              
                    <br>
                    
                    

                    <div class="col-md-5">
                        <div class="form-group">
                                       
                        </div>
                      </div>
                     
                   
                      
                   
                 
                   
                
                   
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
   




@endsection