<script>$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );</script>


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title "> Table d'agent service: </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table">
                      <thead class=" text-primary">
                            <th>matricule</th>
                              <th>image</th>
                        <th>
                         last Name
                        </th>
                        <th>
                          Name
                        </th>
                     
                        <th>
                        Date Conge
                        </th>
                        <th>
                        Service
                        </th>
                        <th>
                      SuperViseur
                        </th>
                      
                        <th>
                      
                       Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($user as $user)
                        <tr>
                        <td>#{{$user->ko}}</td>
                              <td> <div class="author">
                             <a href="#pablo">
                                <img src="/storage/cover_images/{{$user->image}}" alt="..." class="avatar img-raised">
                                                         </a>
                                         </div></td>
                            <td>{{$user->prenom}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->dateembauche}}</td>
                            <td>{{$user->service->nom}}</td>
                            
                            <td>{{$user->kochef}}</td> 
                                
                                <td> 
                                    <a href="/liste-agent/{{$user->id}}" class="btn btn-success btn-link btn-lg" >
                                <span class="material-icons">  remove_red_eye</span>   </a>
                         
                                   <button  type="button" rel="tooltip" id="#delete"  data-toggle="modal" data-target="#delete" title="Remove" class="btn btn-success btn-link btn-sm">
                                <i  class="material-icons" class="btn btn-danger">close</i>
                              </button></td>
                   

                        </tr>
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


      