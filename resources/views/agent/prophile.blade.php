@extends('layouts.nav4')

@section('content')
       


    <div class="row">
<div class="col-md-6">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="/storage/cover_images/{{Auth()->user()->image}}" />
                  </a>
                </div>
           
                <div class="card-body">
                  <div class="row">
                  <div class="col-6">
                        <div class="form-group">
                      <label for="nom">Nom complet:</label>
                        <span>{{Auth()->user()->name}} {{Auth()->user()->prenom}}</span>
                   </div>
                   <div class="form-group">
                      <label for="nom">Matricule_____ :</label>
                        <span>{{Auth()->user()->ko}} </span>
                        </div>
                        <div class="form-group">
                      <label for="nom">SuperViseur :</label>
                        <span>{{Auth()->user()->kochef}}</span>
                        </div>
                        <div class="form-group">
                      <label for="nom">Service__: </label>
                        <span>{{Auth()->user()->service_id}}</span>
                        </div>
                        <div class="form-group">
                      <label for="nom">poste___: </label>
                        <span>{{Auth()->user()->poste}}</span>
                        </div>
                  
                  
                  </div>
                  
                  <div class="col-6">
                  <div class="form-group">
                      <label for="nom">Telephone :</label>
                        <span>{{Auth()->user()->tele}}</span>
                        </div>
                  
                        <div class="form-group">
                      <label for="nom">email____ :</label>
                        <span>{{Auth()->user()->email}}</span>
                        </div>
                        <div class="form-group">
                      <label for="nom">Solde Conge :</label>
                        <span class="badge badge-success">{{Auth()->user()->solde}}</span>
                        </div>
                        <div class="form-group">
                      <label for="nom">Jour consommer :</label>
                        <span class="badge badge-success">{{Auth()->user()->jour}}</span>
                        </div>
                        <div class="form-group">
                      <label for="nom">date Embauche :</label>
                        <span>{{Auth()->user()->dateembauche}}</span>
                        </div>
           
                      
                  </div>
                  
                  
            
                  </div>
                
                       <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"> edit</button>
       
                </div>
              </div>
            </div>
        
     
      <div class="col-md-6">
      
 
      <div class="card card-profile">
                <div class="card-avatar">
              
                    <img class="img" src="../assets/img/ops.png" />
                  </a>
                </div>
                <div class="card-body">
                <h6 class="card-category text-gray">Deposer une Note ou bien une Reclamation</h6>
                <form action="/profil" method="Post">
                @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input  name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contenu</label>
 
    
<textarea name="description"  name="raison" class="form-control" id="message-text"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <button type="submit" class="btn btn-success">Deposer</button>
</form>
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
  
        <form  action="/profil/{{Auth()->user()->id}}"  enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="file-field">
    
    <label for="image" class="col-form-label"> Modifier l'image de prophil</label> 
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