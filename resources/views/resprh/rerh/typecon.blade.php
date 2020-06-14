@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<!--popup ajouter service-->

<a class="btn btn-success" href="/administration"><span class="material-icons">
keyboard_backspace
</span></a>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un type conge</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="typecon" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text"  name="nom" class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Ajouter</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="row">
            
<div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Gestion Type Congé</h4>
                
                </div>
                <div class="col-lg-6 col-md-2">
                  <button type="button" class="btn btn-orange" data-toggle="modal"  data-target="#exampleModal" ><span class="material-icons">add</span>Ajouter</button></tr>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                 
                    <thead class="text-success">
                      <th>ID</th>
                     <th>Name</th> 
                     <th class="text-right">Action<th>
                     
                    </thead>
                    <tbody>
                      
                   
                    @foreach($typeconges as $typeconges)          
    <tr>

      <td >{{$typeconges->id}}</td>
      <td>{{$typeconges->nom}}</td>

      <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="Editer" data-typeconges_id="{{$typeconges->id}}" data-nom="{{$typeconges->nom}}" data-toggle="modal"  data-target="#edit" class="btn btn-success  btn-sm">
            <i class="material-icons">edit</i> </button>
            <button  data-typeconges_id="{{$typeconges->id}}" data-name="{{$typeconges->nom}}" type="button" rel="tooltip"  data-target="#delete" data-toggle="modal"  title="Remove" class="btn btn-danger  btn-sm">
                                <i  class="material-icons" >close</i>
                              </button>
      
      
    </tr>








   @endforeach

                    </tbody>
                  </table>
                    </div>
                  </div>
                </div>
            

           

     <!-- supprimer -->
 


     <div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form  action="/delete" method="POST">
        @csrf
     
        <div class="modal-body">
            
        <input type="hidden" name="typeconges_id" id="typeconges_id" value="">
   
          <p>voulez-vous vraiment supprimer  ?</p>
        </div>
          <div class="modal-footer">
            
        <button type="button" class="btn btn-orange" data-dismiss="modal">No</button>
        <button onclick="md.showNotificationn('top','right')"  type="submit" class="btn btn-success">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>

<!-- editer type -->

    
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Modifier le type congee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="/editer" method="POST">
        @csrf
        <input type="hidden"  name="typeconges_id" class="form-control" id="typeconges_id">
          <div class="form-group">
         
            <label for="recipient-name" class="col-form-label">Modifier le nom de type :</label>
            <br>
            <input type="text"  name="nom" class="form-control" id="nom">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
        <button type="submit" class="btn btn-success">Editer</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>
 

@endsection


  
@section('scripts')
<script>
  $('#delete').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var name= button.data('name')
     var typeconges_id= button.data('typeconges_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation du suppression ');
     modal.find('.modal-body #name').val(name);
     modal.find('.modal-body #typeconges_id').val(typeconges_id);

    })

    </script>
    <script>
  $('#edit').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var nom= button.data('nom')
     var typeconges_id= button.data('typeconges_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation du suppression ');
     modal.find('.modal-body #nom').val(nom);
     modal.find('.modal-body #typeconges_id').val(typeconges_id);

    })

    </script>
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
  </script>

 
  
@endsection
