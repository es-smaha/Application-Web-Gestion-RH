<script>$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
  </script>

  

<script>

$('#delete').on('show.bs.modal',function(event){
 var button =$(event.relatedTarget)
 var name= button.data('name')
 var user_id= button.data('user_id')

 var modal =$(this)
 modal.find('.modal-title').text('Confirmation de suppresion');
 modal.find('.modal-body #name').val(name);
 modal.find('.modal-body #user_id').val(user_id);




})



</script>
    <script>
$('#delete').on('show.bs.model',function(event{
    var  button=$(event.relatedTarget)
    var user_id=button.data('userid')
    var modal=$(this)
    modal.find('.modal-body #user_id').val(user_id)




  }));


</script>
 






          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                <div class="sectiontitle">
    <h2 style="color:white; font-size:35px"> Collaborateurs du Service {{$servicename}} </h2>
    
</div>
               
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table">
                      <thead class=" text-primary">
                            <th>Matricule</th>
                              <th>Image</th>
                        <th>
                       Nom complet
                        </th>
                     
                        <th>
                        Date Embauche
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
                        <td>{{$user->ko}}</td>
                              <td> <div class="author">
                             <a href="#pablo">
                                <img src="/storage/cover_images/{{$user->image}}" alt="..." class="avatar img-raised">
                                                         </a>
                                         </div></td>
                            <td>{{$user->prenom}} {{$user->name}}</td>
                            <td>{{$user->dateembauche}}</td>
                            <td>{{$user->service->nom}}</td>
                               <td>{{$user->kochef}}</td> 
                                
                                <td>  <div class="row">
                                  <div class="text-right">
                                    <a href="/users/{{$user->id}}" class="btn btn-success btn-sm" >
                                <span class="material-icons">  remove_red_eye</span>   </a>
                             
                                <button  data-name="{{$user->name}}" data-user_id="{{$user->id}}" type="button" rel="tooltip"  data-target="#delete" data-toggle="modal"  title="Remove" class="btn btn-info  btn-sm">
                                <i  class="material-icons" >close</i>
                              </button>
                           
                              </div>
                              </div>
                              </td>
                   

                        </tr>

  

<div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form  action="/users"  method="POST">
        @csrf
     
        <div class="modal-body">
            
          <input type="hidden" name="user_id" id="user_id" value="">
          <input type="text" name="name" id="name" value="">
          <p>voulez-vous vraiment supprimer  ?</p>
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
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>



        
        
 