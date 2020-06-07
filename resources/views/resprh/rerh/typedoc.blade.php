@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<!--popup ajouter service-->
<a class="btn btn-success" href="/dashboard2"><span class="material-icons">
keyboard_backspace
</span></a>
<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Gestion des Type Des Document administratifs</h4>
                
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
        <button type="button" rel="tooltip" title="Editer" data-toggle="modal"  data-target="#edit" class="btn btn-info  btn-sm">
            <i class="material-icons">edit</i> </button>

          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger  btn-sm" data-userid="{{$typedocument->id}}" data-toggle="modal" data-target="#delete" >
        <i class="material-icons">close</i> </button>
      </td>
      
    </tr>
   
            

           

     <!-- Button trigger modal -->
     @if(count($typedocuments)>0)
<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/typedoc/{{$typedocument->id}}" method="POST">
        @csrf
        @method('delete')
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="users_id" id="user_id" value="">
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

@endif
 
@if(count($typedocuments)>0)
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifer un service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="/typedoc/{{$typedocument->id}}" method="POST">
       @method("PUT")
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text" value="{{$typedocument->name}}" name="name" class="form-control" id="name">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Editer</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>
@endif

        
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
  </div>


@endsection


  
@section('scripts')
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
  </script>
  <script>
  $('#delete').on('show.bs.model',function(event{
    var  button=$(event.relatedTarget)
    var user_id=button.data('userid')
    var modal=$(this)
    modal.find('.modal-body #user_id').val(user_id)




  }));
  
@endsection
