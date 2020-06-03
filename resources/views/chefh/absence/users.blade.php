@extends('layouts.nav1')
@section('title')
Ajouter absences

@endsection
@section('title')

@endsection

@section('content')

<div class="sectiontitle">
    <h2>Service {{$service}} </h2>
    <span class="headerLine"></span>
</div>
<a href="/absence" class="btn btn-success"><span class="material-icons">person</span>Liste D'absence</a>
<div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title "> Liste des employees de  service: </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead class=" text-primary">
                            <th>Matricule<i class="fa fa-sort"></i>
                              <th>Image <i class="fa fa-sort"></i>
                        <th>
                           
                      Nom Complet <i class="fa fa-sort"></i>
                      
                     
                        </th>
                     
                        <th>
                        Date Embauche<i class="fa fa-sort"></i>
                        </th>
                        <th>
                        Service<i class="fa fa-sort"></i>
                        </th>
                        <th>
                      SuperViseur<i class="fa fa-sort"></i>
                        </th>
                      
                        <th class="d-flex justify-content-start"> 
                      
                        <b> Marquer Absent</b>
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
                            <td>{{$user->name}}{{$user->prenom}}</td>
                         
                            <td>{{$user->dateembauche}}</td>
                            <td>{{$user->service->nom}}</td>
                            
                            <td>{{$user->kochef}}</td> 
                                
                                <td> 
                                  
                                
                                <button data-toggle="modal"  data-target="#Absent" class="btn btn-warning flex justify-content-center"><span class="material-icons">spellcheck</span</button>

                              </td>
                   

                        </tr>
                        <div class="modal modal-danger fade " id="Absent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marquer Comme  Absent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            
      <form action="/absence" method="POST">
      @csrf
        <div class="modal-body">
      
<div class="form-group">
<label for="recipient-name" class="col-form-label text-center"> l'absence est-elle Justifiee?</label> <br>
<div class="form-check form-check-radio">

<label class="form-check-label">
    <input class="form-check-input" type="radio" name="justifie" id="exampleRadios1" value="0" >
     NON
    <span class="circle">
        <span class="check"></span>
    </span>
</label>
</div>
<div class="form-check form-check-radio">

<label class="form-check-label">
    <input class="form-check-input" type="radio" name="justifie" id="exampleRadios1" value="1" >
   OUI
    <span class="circle">
        <span class="check"></span>
    </span>
</label>
</div>
</div>
 
<div class="form-group">
<label for="recipient-name" class="col-form-label text-center">Commentaire</label> <br>
<input  type="text" name="commentaire" class="form-control" id="recipient-name">
</div>
      <input type="hidden" name="matriculeuser" value="{{$user->ko}}">
        <input type="hidden" name="nomuser" value="{{$user->name}}">
        <input type="hidden" name="prenomuser" value="{{$user->prenom}}">
     
     
     
      </div>
          
      <div class="modal-footer">
      Voulez-vous marquer   <span class="badge badge-warning">{{$user->name}} {{$user->prenom}}</span> Absent(e) ?
        <button type="button" class="btn btn-success  btn-sm" data-dismiss="modal">Non</button>
            
        <button type="submit"  onclick="md.showNotificationn('top','center')" class="btn btn-warning btn-sm">Oui</button>
       
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


  



       












<!-- Ajouter Agent -->
  </div>


@endsection

@section('scripts')
    <script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
      
    } );
 
    table.buttons().container()
        .insertBefore( '#example_filter' );
} );
</script>
  @endsection


  
