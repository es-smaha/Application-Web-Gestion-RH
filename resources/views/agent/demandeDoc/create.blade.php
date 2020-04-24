@extends('layouts.nav4')
@section('title')

@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">note_add</span></i> Effectuer une demande
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> Consulter mes demandes
                  <div class="ripple-container"></div>
                </a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
           <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card card-stats">
                <div class="card-header card-header-dark card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  
                  <h3 class="card-title">Effectuer une demande</h3>
                    <form method="POST" action="/doc">
                  @csrf

                 
                      <label for="typedocument_id">choisissez un type de document</label>

                      <select name="typedocument_id" id="inputState" class="form-control">
                          @if(count($typedoc) >0)
                      @foreach($typedoc as $doc)
                        <option value="{{$doc->id}}" > {{$doc->name}}</option>
                        @endforeach
                              @endif
                      </select>
                  
                  

                  <button type="submit" class="btn btn-dark">Effectuer</button>
                  </form>

                </div>
               
              </div>
            </div>
          </div>

          <div class="tab-pane" id="messages">
          <table class="table ">
<thead>
  <tr>
    
    <th scope="col" >mes demandes</th>
    <th scope="col">la date de creation</th>
    <th scope="col">l'état</th>
    <th scope="col">action</th>
  </tr>
</thead>
<tbody>
  <tr>
  @if(count($demandedocuments) >0)
  @foreach( $demandedocuments as $dec)
  
  @if(auth::user()->id==$dec->user_id)
   
    <td>{{$dec->typedocument->name}}</td>
    <td>{{$dec->created_at}}</td>
    @if($dec->etat==0)
    <td><div class="alert alert-warning"> En attente </div></td></td>
    @else
    <td>
    <div class="alert alert-success"> Validé </div></td>
    @endif
    <td>
    

          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-userid="{{$dec->id}}" data-toggle="modal" data-target="#delete" >
        <i class="material-icons">delete</i> </button>
    </td>
  </tr>
  
  
  @endif
  <div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/doc/{{$dec->id}}" method="POST">
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
  @endforeach
  @else
    <p>non valide</p>
  @endif

</tbody>
</table>
          </div>
                 </div>
      </div>
    </div>
  </div>



 


     












@endsection
@section('scripts')
@endsection