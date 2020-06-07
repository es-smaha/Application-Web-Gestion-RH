@extends('layouts.nav1')
@section('title')

@endsection

@section('content')
  <a href="/demande-conge" class="btn btn-succcess"><span class="material-icons">keyboard_return</span></a>

          <div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link " href="/demande-conge" >
                  <i class="material-icons"><span class="material-icons">note_add</span></i> les demandes en attentes
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/conge-refuser">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> les demandes refuser
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active" href="/conge-accepter" >
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> les demandes accepter
                  <div class="ripple-container"></div>
                </a>
              </li>
          
            </ul>
          </div>
        </div>
      </div>  
          
<div class="container-fluid">
        <!-- Mes demandes de Conge  -->
      
        
              <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Archives des demandes de congé refusée</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table table-hover">
                      <thead class="">
       
       
                      <th>Nom</th>
                          <th>Type Conge</th>
                             <th>date conge</th>
                                <th>Jour reservee</th>
                                   
                                          <th>solde Conge avant</th>
                                          <th>solde Conge apres</th>
                                               <th>date creation</th>
                                                  <th>Etat</th>
                                                  <th>Confirmation Rh</th>
                                                  <th><span class="material-icons">loupe</span></th>
                               
                                <th>pdf</th>
                                <th>delete</th>
                      </thead>
                      <tbody>
                      @foreach($conge as $conge)
                     
                              <tr>
                              <td>  <a href="/us/{{$conge->id}}">{{$conge->user->name}} </a> <span class="badge badge-warning">{{$conge->user->jour}}</span></td>
                               <td>{{$conge->typeconge->nom}} </td>
                                  <td>{{$conge->datedebut}}   <b >a </b> {{$conge->datefin}}</td>
                                      <td>  {{$conge->jour}}</td>
                                        
                                            <td>  {{$conge->solde + $conge->jour}}</td>
                                            <td>{{$conge->solde}}</td>
                                               <td>{{$conge->created_at}}</td>
                                               <td> <span class="badge badge-success">Accepté</span> </td>
                                               @if($conge->decision==false)
                                               <td> <span class="badge badge-warning">en attente</span> </td>
                                               @else
                                               <td> <span class="badge badge-success">Accepté</span> </td>
                                               @endif
                                                <td >  <a href="/us/{{$conge->id}}" style="color:orange" ><span class="material-icons warnning">loupe</span></td>
                                              
                                               @if($conge->pdf==0)
                                                       
                                                        <td >  <a href="/pdf-convert/{{$conge->id}}" style="color:green" ><span class="material-icons">picture_as_pdf</span></td>
                                                          @else
                                                          <td> <a type="button" rel="tooltip" id="#motif"  data-toggle="modal" data-target="#motif" title="deja Envoyer" class="btn btn-success btn-link btn-sm" disabled>
                                                        <span class="material-icons"><span class="material-icons">done_all</span>picture_as_pdf</span></a></td>
<!--  -->                                                 @endif
                                                
                                        <td> <button type="button" rel="tooltip" id="#delete"  data-toggle="modal" data-target="#delete" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <span class="material-icons">delete</span></button></td>

  <!-- supprimer demande -->
<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <form  action="/delete/{{$conge->id}}" method="POST">
        @csrf
        @method('delete')
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="users_id" id="user_id" value="">
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

<!-- PDF -->
<div class="modal modal-danger fade " id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <form  action="/pdfinsert" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="modal-body">
            <p>Importer le document ici </p>
          <input type="hidden" name="conge_id" id="user_id" value="{{$conge->id}}">
          <input type="file" name="recu" class="form-control">
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






          @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
@endsection
