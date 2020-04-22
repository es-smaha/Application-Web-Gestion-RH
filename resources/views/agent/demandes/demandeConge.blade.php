@extends('layouts.nav4')

@section('content')
       
    <br>
        <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>Ajouter Demande de conge </button>
            <br>

                    
            <div class="container-fluid">
        <!-- Mes demandes de Conge  -->
      
        @foreach($conge as $conge)
        @if(!auth::guest())
              @if(auth::user()->id==$conge->user_id)
       
            <div class="row">
                 <div class="col-sm-6">
                     
                 <div class="jumbotron top-space">
                 <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="asset/images/documents.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"> ma Demande de Conge</h3>
                    <h5>Mon solde  Conge:</h5>
                    <p> {{$conge->user->solde}}</p>
                    <h5 for="">Jour Reservee <h5>
                    <p> {{$conge->jour}}</p>
                    <p class="card-text"><small class="text-muted">cree a :{{$conge->created_at}}</small></p>
        
        @if($conge->avis=='0' && $conge->decision==false)
    
             <p>la demande est encore en  <span class="badge badge-warning">en attente</span> </p>
        <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>edit</button>
        <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>delete </button>
        @endif
   
          @if($conge->avis=='1' && $conge->decision==true)
         
          <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>lopaa</button>
        <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>opaaa </button>
        @endif
     
        @if($conge->avis=='2' && $conge->decision==true)
          <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>edit</button>
        <button type="button" class="btn btn-warning btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>delete </button>
        @endif
      </div>
    </div>
  </div>
</div>
          </div>
          @endif
          @endif
         
          @endforeach













                 </div>

                      


            </div>


   
















<div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Effectuer Demande de conge</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/conge" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type Conge   <b class="text-danger  ">*</b></label>
          
            <div class="col-md-12">
                                <select name="typeconge_id" id="cat" class="form-control">
                                @foreach($type as $type )
                                    <option value="{{$type->id}}">{{$type->nom}}</option>

                                @endforeach
                            
                                </select>
                             
                            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">date Debut  <b class="text-danger  ">*</b></label>
            <input  name="datedebut" type="date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date Fin<b class="text-danger  ">*</b></label>
            <input  name="datefin" type="date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jour reserve <b class="text-danger  ">*</b></label>
            <input name="jour"  type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
          <label for="message-text"   class="col-form-label">raison</label>
            <p class="text-muted">pas obligatoire *</p>
            <textarea   name="raison" class="form-control" id="message-text"></textarea>
          </div>
         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-success" >Ajouter</button>
    
     @csrf
        </form>
      </div>
    
    </div>

  </div>
</div>



    </div>




        

    
  
                

                       







@endsection