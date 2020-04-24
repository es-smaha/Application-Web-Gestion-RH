@extends('layouts.nav4')

@section('content')
       
    <br>
        <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons"></span>Ajouter Demande de conge </button>
            <br>

                    
            <div class="container-fluid">
        <!-- Mes demandes de Conge  -->
      
        
              <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
       
       
                      <th>Nom</th>
                        <th>Type Conge</th>
                           <th>date conge</th>
                            <th>Jour reservee</th>
                              <th>date creation</th>
                                <th>Etat</th>
                              <th>edit</th>
                              <th>delete</th>
                              
                                  <th>recu</th>
                          
                      </thead>
                      <tbody>
                      @if(count($conge)>0)
                      @foreach($conge as $conge)
                      
        @if(!auth::guest())
              @if(auth::user()->id==$conge->user_id)
                              <tr>
                                    <td>{{$conge->user->name}}</td>
                                    <td>{{$conge->typeconge->nom}}</td>
                                    <td>{{$conge->datedebut}}   <span> a </span> {{$conge->datefin}}</td>
                                    <td>{{$conge->jour}}</td>
                                      <td>{{$conge->created_at}}</td>
                                                    
                                              @if($conge->avis=='0' && $conge->decision==false || $conge->avis=='1' && $conge->decision==false ||$conge->avis=='2' && $conge->decision==false)
                                              <td> <span class="badge badge-warning">en attente</span> </td>
                                                <td>  <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons">create</span></button></td>
                                                   <td><button type="button" class="btn btn-danger btn-round" data-toggle="modal"  data-target="#ajouter" ><span class="material-icons">delete</span> </button></td>
                                                        <td></td>
                                                   @endif

                                                   @if($conge->avis=='1' && $conge->decision==true )
                                                       <td> <span class="badge badge-success">accepte</span> </td>
                                                          <td>  <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" disabled><span class="material-icons">create</span></button></td>
                                                              <td><button type="button" class="btn btn-danger btn-round" data-toggle="modal"  data-target="#ajouter" disabled><span class="material-icons">delete</span> </button></td>
                                                                  <td><span class="material-icons">get_app</span></td>
                                                                                @endif

                                                                    @if($conge->avis=='2' && $conge->decision==true)
                                                                    <td><span class="badge badge-danger">Refusee</span> </td>
                                                                    <td>  <button type="button" class="btn btn-success btn-round" data-toggle="modal"  data-target="#ajouter" disabled><span class="material-icons">create</span></button></td>
                                                              <td><button type="button" class="btn btn-danger btn-round" data-toggle="modal"  data-target="#ajouter" disabled><span class="material-icons">delete</span> </button></td>
                                                                    <td>    <a href="/conge/{{$conge->id}}" style="color:red"><span class="material-icons" >picture_as_pdf</span></a> </td> @endif
                                                                    </tr>



        
                        
                    
                                @endif
          @endif
         
          @endforeach
          @else
                            <td>aucuene demande</td>
                            @endif
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
            <input name="jour"  type="number" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
          <label for="message-text"   class="col-form-label">raison</label>
            <p class="text-muted">pas obligatoire *</p>
            <textarea   name="raison" class="form-control" id="message-text"></textarea>
          </div>
         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-success" onclick="md.showNotification('top','center')" >Ajouter</button>
    
     @csrf
        </form>
      </div>
    
    </div>

  </div>
</div>



    </div>




        

    
  
                

                       







@endsection