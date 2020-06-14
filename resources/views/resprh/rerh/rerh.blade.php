@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<a class="btn btn-success" href="/dashboard2"><span class="material-icons">
keyboard_backspace
</span></a>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Ajouter un service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="service" method="POST">
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

        <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title"  >Gestion des Services</h4>
                
                </div>
                <div class="col-lg-6 col-md-2">
                  <button type="button" class="btn btn-orange" data-toggle="modal"  data-target="#exampleModal" ><span class="material-icons">add</span>Ajouter</button> </tr></div>

                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-success">
                      <th>ID</th>
                      <th>Name</th>
                     
                    </thead>
                    <tbody>
                      

                       @if(count($services)>0)
                    @foreach($services as $service)
    <tr>
      <td >{{$service->id}}</td>
      <td>{{$service->nom}}</td>

      <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="Editer" data-toggle="modal"  data-service_id="{{$service->id}}" data-nom="{{$service->nom}}"  data-target="#edit" class="btn btn-success btn-sm">
            <i class="material-icons">edit</i> </button>

          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger  btn-sm"  data-service_id="{{$service->id}}" data-nom="{{$service->nom}}" data-toggle="modal" data-target="#delete" >
        <i class="material-icons">close</i> </button>
      </td>
      
    </tr>
  

           

     <!-- Button trigger modal -->






@endforeach

@else
<td >no data</td>
   <td>no data</td>
@endif

                 </tbody>
               </table>
                 </div>
               </div>
             </div>
             </div>


<!-- SUPPRIMER -->


<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form  action="/supprimer" method="POST">
        @csrf
        
        <div class="modal-body">
            <p>voulez-vous vraiment  supprimer  ce type </p><span class="badge badge-danger"> <h4></h4></span> ?
          <input type="hidden" name="service_id" id="service_id" value="">
         
            <input  class="form-control" type="text" name="nom" id="nom" value=""> 
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-orange" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">yes</button>
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
      <form  action="/savi" method="POST">
        @csrf
        <input type="hidden"  name="service_id" class="form-control" id="service_id">
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
    $(document).ready(function() {
    $('#data').DataTable();
} );
  </script>
 <script>
  $('#delete').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var nom= button.data('nom')
     var service_id= button.data('service_id')

     var modal =$(this)
    //  modal.find('.modal-title').text('Confirmation du suppression ');
     modal.find('h4').text(nom);
     modal.find('.modal-body #service_id').val(service_id);

    })

    </script>
    <script>
  $('#edit').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var nom= button.data('nom')
     var service_id= button.data('service_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation du suppression ');
     modal.find('.modal-body #nom').val(nom);
     modal.find('.modal-body #service_id').val(service_id);

    })

    </script>
  
@endsection
