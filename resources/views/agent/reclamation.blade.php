
@extends('layouts.nav4')

@section('content')
       
<div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Zone de Reclamation</h4>
                
                </div>
                <div class="card-body table-responsive">
                    <a href="/profil"><span class="material-icons">add_circle</span>Ajouter une reclamation</a>
                
                </div>
              </div>
            </div>


@foreach($rec as $rec)

<div class="col-lg-12 col-md-4 col-sm-4">
 
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
             
                  
             
                </div>
                <div class="card-header">
        
                  <div class="stats">
                  <div class="card-icon">
                  <h3 class="card-title">{{$rec->titre}}</h3>
                  </div>
               
            
                </div>
                <div class="card-header">
                  <div class="stats">
                  <p class="card-title">{{$rec->description}}</p>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">        @if(!auth::guest())
              @if(auth::user()->id==$rec->user_id)
              <button type="button" data-toggle="modal"  data-target="#ajouter" rel="tooltip" title="Edit Task" class="btn btn-success btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button></td>
                              @endif
                              @endif</div>
                       <p >{{$rec->created_at->diffforHumans()}} <b>par </b> <span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span> </p>  
                    
                 

            
                  </div>
                </div>
              </div>
           
            </div>






            <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/reclamation/{{$rec->id}}" method="POST">
      @method('PUT')
                      
                      <div class="modal-body">
                      <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input  name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$rec->titre}}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contenu</label>
 
    
<textarea name="description"  name="raison" class="form-control" id="message-text">{{$rec->description}}</textarea>
  </div>

    
  
                      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-success" onclick="md.showNotificationn('top','right')" >Deposeser</button>
      </div>
    </div>
    @csrf
   </form>
  </div>
</div>
  </div>
    
            

@endforeach
            @endsection