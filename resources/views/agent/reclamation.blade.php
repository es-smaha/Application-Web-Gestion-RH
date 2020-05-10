
@extends('layouts.nav4')

@section('content')
      
<div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Zone de Reclamation</h4>
                
                </div>
                <div class="card-body table-responsive">
                    <a href="/Myprophil"><span class="material-icons">add_circle</span>Ajouter une reclamation</a>
                
                </div>
              </div>
            </div>
  
@if(count($rec)>0)
@foreach($rec as $rec)

<div class="card">
  <div class="card-body ">
        <h6 class="card-category text-danger">
            <i class="material-icons">trending_up</i> {{$rec->titre}}
        </h6>
        <h4 class="card-title">
            <a href="#pablo">{{$rec->description}}</a>
        </h4>

    </div>
    <div class="card-footer ">
            <div class="author">
                <a href="#pablo">
                   <img src="/storage/cover_images/{{$rec->user->image}}" alt="..." class="avatar img-raised">
                   <span class="badge badge-pill badge-primary">{{$rec->user->name}} {{$rec->user->prenom}}</span>
                    <span>{{$rec->created_at}} {{$rec->created_at->diffforHumans()}}</span>
                </a>
            </div>
           <div class="stats ml-auto">
           @if(!auth::guest())
              @if(auth::user()->id==$rec->user_id)
              <button type="button" data-toggle="modal"  data-target="#ajouter" rel="tooltip" title="Edit Task" class="btn btn-success btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip"data-toggle="modal"  data-target="#delete" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button></td>
                              @endif
                              @endif</div>
                      
                    
                 
            </div>
        </div>
     
      @endforeach
      
      {{$pages}} 
      <div class="pages">
                    <ul class="pagination ">
                    
                    </ul>
                </div>

                <nav aria-label="...">
</nav>

    
            <!--delete  -->
            
             
<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/Reclamationn/{{$rec->id}}" method="POST">
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