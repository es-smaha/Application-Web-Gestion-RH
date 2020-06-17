@extends('layouts.nav2')
@section('title')

@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gestion des types des documents administratives</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="typedoc" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text"  name="name" class="form-control" id="recipient-name">
           
          </div>
          <div class="form-group">
         
            <!-- <label for="recipient-name" class="col-form-label">( par an ou par mois )</label> -->
             <!-- <input type="text"  " class="form-control" id="recipient-name">  -->
             <label for="exampleFormControlSelect1">Periodicite</label>
             
    <select name="periode" class="form-control" id="exampleFormControlSelect1">
      <option value="  An">ans</option>
      <option value="mois">mois</option>
    
    </select>
          </div>
         
          <div class="form-group">
 
            <label for="recipient-name" class="col-form-label">Nombre maximal par periode</label>
            <input type="number"  name="max" class="form-control" id="recipient-name">
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
<a class="btn btn-success" href="/administration"><span class="material-icons">keyboard_backspace</span></a>

<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Gestion des Types Des Document administratifs</h4>
                                </div>
                <div class="col-lg-6 col-md-2">
                  <button type="button" class="btn btn-orange" data-toggle="modal"  data-target="#exampleModal" ><span class="material-icons">add</span>Ajouter</button> </tr>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                  
                    <thead class="">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Nombre maximale   <br> par Periode</th>
                        <th>Périodicité</th>
                        
                      <th class="text-right">action</th>
                    </thead>
                    <tbody>
                      
                         @if(count($typedocuments)>0)
                    @foreach($typedocuments as $typedocument)
    <tr>
      <td >{{$typedocument->id}}</td>
      <td>{{$typedocument->name}}</td>
      <td>{{$typedocument->max}}</td>
      <td>{{$typedocument->periode}}</td>
      <td  class="td-actions text-right">
        <button type="button" rel="tooltip" data-typedocument_id="{{$typedocument->id}}" data-max="{{$typedocument->max}}"  data-periode="{{$typedocument->periode}}" data-name="{{$typedocument->name}}" title="Editer" data-toggle="modal"  data-target="#edit" class="btn btn-info  btn-sm">
            <i class="material-icons">edit</i> </button>

          <button type="button" data-target="#delete" rel="tooltip"  class="btn btn-danger  btn-sm" data-typedocument_id="{{$typedocument->id}}" data-nom="{{$typedocument->nom}}" data-toggle="modal" >
        <i class="material-icons">close</i> </button>
      </td>
      
    </tr>
   
  
        
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
         
               

        




<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >modification de ce type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="edite" method="POST">
        @csrf
          <div class="form-group">
          <input type="hidden" name="typedocument_id" id="typedocument_id" value="">
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text"  name="name" class="form-control" id="name">
           
          </div>
          <div class="form-group">
         
            <!-- <label for="recipient-name" class="col-form-label">( par an ou par mois )</label> -->
             <!-- <input type="text"  " class="form-control" id="recipient-name">  -->
             <label for="exampleFormControlSelect1">Periodicite</label>
             
    <select name="periode" class="form-control" id="periode">
      <option value="an">ans</option>
      <option value="mois">mois</option>
    
    </select>
          </div>
         
          <div class="form-group">
 
            <label for="recipient-name" class="col-form-label">Nombre maximal par periode</label>
            <input type="number"  name="max" class="form-control" id="max">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Modifier</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal  fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form  action="/supp" method="POST">
        @csrf
    
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="typedocument_id" id="typedocument_id" value="">
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
<!--popup ajouter service-->


<!-- editer type -->
 
  
 <!-- supprimer -->






 
@endsection


  
@section('scripts')

<script>
  $('#delete').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var name= button.data('name')
     var typedocument_id= button.data('typedocument_id')

     var modal =$(this)
     modal.find('.modal-title').text('Confirmation du suppression ');
     modal.find('.modal-body #nom').val(nom);
     modal.find('.modal-body #typedocument_id').val(typedocument_id);

    })

    </script>
    <script>
  $('#edit').on('show.bs.modal',function(event){
     var button =$(event.relatedTarget)
     var name= button.data('name')
     var max= button.data('max')
     var periode= button.data('periode')
     var typedocument_id= button.data('typedocument_id')

     var modal =$(this)
  
     modal.find('.modal-body #name').val(name);
     modal.find('.modal-body #max').val(max);
     modal.find('.modal-body #periode').val(periode);
     modal.find('.modal-body #typedocument_id').val(typedocument_id);

    })

    </script>



  
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
  </script>

@endsection
