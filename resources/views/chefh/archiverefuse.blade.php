@extends('layouts.nav1')
@section('title')

@endsection

@section('content')

                    
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
                              <th>delete</th>
                              <th>Motifs</th>
                      </thead>
                      <tbody>
                      @foreach($conge as $conge)
                     
                              <tr>
                                    <td>{{$conge->user->name}}</td>
                                          <td>{{$conge->typeconge->nom}}</td>
                                            <td>{{$conge->datedebut}}   <span> a </span> {{$conge->datefin}}</td>
                                            <td>{{$conge->jour}}</td>
                                            
                                              <td>{{$conge->created_at}}</td>
                                             
                                            <td> <span class="badge badge-danger">Refusee</span> </td>
                                                        <td> <button type="button" rel="tooltip" id="#delete"  data-toggle="modal" data-target="#delete" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <span class="material-icons">delete</span></button></td>
                                                        <td> <button type="button" rel="tooltip" id="#motif"  data-toggle="modal" data-target="#motif" title="ecrire motif" class="btn btn-success btn-link btn-sm">
                                                        <span class="material-icons">picture_as_pdf</span></button></td>

<!--  -->

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
<!-- done -->

<!-- motif -->
<div class="modal modal-danger fade " id="motif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <form  action="" method="POST">
        @csrf
    
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
<!--  -->


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

@endsection
