@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<div class="container-fluid">
              <a href="/create" class="btn btn-dark">Ajouter Agent</a>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         last Name
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          KO
                        </th>
                       
                        <th>
                          telephone
                        </th>
                        <th>
                          date Embauche
                        </th>
                        <th>
                          Solde Congee
                        </th>
                        <th>
                        salaire
                        </th>
                        <th>
                          UserType
                        </th>
                        <th>
                        Show
                        </th>
                        <th>
                       Edit
                        </th>
                        <th>
                       delete
                        </th>
                      </thead>
                      <tbody>
                      @foreach($user as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->prenom}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->ko}}</td>
                            <td>{{$user->tele}}</td>
                            <td>{{$user->dateembauche}}</td>
                           
                            <td>{{$user->solde}}</td>
                            <td>{{$user->salaire}}</td>
                            <td>{{$user->usertype}}</td>
                                
                                <td> 
                                    <a href="/users/{{$user->id}}" class="btn btn-success btn-link btn-lg" >
                                <span class="material-icons">  remove_red_eye</span>   </a></td>
                                    
                                        
                                               
                                    <td><button type="button" rel="tooltip"  title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button></td>
                                        <td> <button type="button" rel="tooltip" id="#delete"  data-toggle="modal" data-target="#delete" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button></td>

                        
                        
                        
                        
                        
                        
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>






          <div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/user/{{$user->id}}" method="POST">
        @csrf
        @method('delete')
        <div class="modal-body">
            <p>are you sure you wanna delete</p>
          <input type="hidden" name="users_id" id="user_id" value="">
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection