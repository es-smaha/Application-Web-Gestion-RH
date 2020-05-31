@extends('layouts.nav2')

@section('content')


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
      
                    <div class="row">
                      <div class="col-md-5">

                        <div class="form-group">
                          <label style="font-size:15px">Nom</label>
                            <br>
                           <input type="text"  name="name" class="form-control" id="recipient-name" value="{{Auth()->user()->name}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Prenom</label>
                    <br>
            <input type="text"  name="prenom" class="form-control" id="recipient-name" value=" {{Auth()->user()->prenom}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                        
                          <label style="font-size:15px" class="bmd-label-floating">Sexe</label>
                    <br>  <input type="text"  name="sexe" class="form-control" id="recipient-name" value="{{Auth()->user()->sexe}}">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                       
                          <label style="font-size:15px" class="bmd-label-floating">Situation Familiale</label>
                    <br>  <input type="text"  name="situation" class="form-control" id="recipient-name" value="{{Auth()->user()->situation}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label  style="font-size:15px" class="bmd-label-floating">CNE</label>
                    <br>
                          <input type="text"  name="cne" class="form-control" id="recipient-name" value="{{Auth()->user()->cne}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">KO</label>
                            <br>
                          <input type="text"  name="ko" class="form-control" id="recipient-name" value="{{Auth()->user()->ko}}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label  style="font-size:15px" class="bmd-label-floating">Email </label>
                      <br>
            <input type="text"  name="email" class="form-control" id="recipient-name" value="{{Auth()->user()->email}}">
                        </div>
                      </div>
                    
                    <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating"> telephone</label>
                            <br>
                          <input type="text"  name="tele" class="form-control" id="recipient-name" value="{{Auth()->user()->tele}}">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">date Embauche</label>
                            <br>
                          <input type="date"  name="dateembauche" class="form-control" id="recipient-name" value="{{Auth()->user()->dateembauche}}">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Fonction</label>
                         <br>
                          <input type="text"  name="poste" class="form-control" id="recipient-name" value="{{Auth()->user()->poste}}">
                        
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating"> ChefHiearchique </label>
                            <br>
                          <input type="text"  name="kochef" class="form-control" id="recipient-name" value="{{Auth()->user()->kochef}}">
                        </div>
                          </div>
                          <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Service</label>
                            <br>
                                                    <input type="text"  name="kochef" class="form-control" id="recipient-name" value="{{Auth()->user()->servicee}}">
                        </div>
                      </div>
               
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Solde conge</label>
                            <br>
                          <input type="number"  name="solde" class="form-control" id="recipient-name" value="{{Auth()->user()->solde}}" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label style="font-size:15px" class="bmd-label-floating">Jours Consommee</label>
                            <br>
                          <input type="text"  name="salaire" class="form-control" id="recipient-name" value="{{Auth()->user()->jour}}">
                        </div>
                      </div>
                    </div>
                    <br>
                     
                                 
                   
               
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                  <img class="img" src="/storage/cover_images/{{Auth()->user()->image}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{Auth()->user()->jour}} </h6>
                  <h4 class="card-title">{{Auth()->user()->name}} {{Auth()->user()->prenom}}</h4>
                  <h4 class="card-title">Solde Conge: {{Auth()->user()->Solde}} </h4>
                  
                  <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"> edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
   





<!-- Edit image -->

<div class="modal modal-danger fade " id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<form  action="/Myprophil"  enctype="multipart/form-data" method="POST">
@csrf

<div class="file-field">

<label for="image" class="col-form-label"> Modifier l'image de profil</label> 
<input type="file" name="image" class="form-control">


</div>

<div class="modal-footer">
<button type="button" class="btn btn-success" data-dismiss="modal">No</button>
<button type="submit"  onclick="md.showNotificationn('top','center')" class="btn btn-warning">yes</button>
</div>

</form>
</div>

</div>
</div>
</div>
@endsection