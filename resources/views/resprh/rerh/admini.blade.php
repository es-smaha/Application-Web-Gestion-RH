@extends('layouts.nav2')
@section('title')
    configuration
@endsection

@section('content')



<div class="card-body">
              <div class="row">
                <div class="col-md-10">
                             <h3 ><i class="fa fa-user-md"></i> Configuration</h3>
            </div>
                </div>
<div class="cards-listt">
  
<div class="cardi 1">

  <div class="card_image">  <p text-align="center">Gestion Types conge</p><img src="https://cdn.icon-icons.com/icons2/1146/PNG/512/1486485528-add-calendar-date-event_81152.png" /> </div>
  <div class="card_title title-white">
  
  <a  data-toggle="modal"  data-target="#conge"><span class="material-icons" style="color:black" >add_circle</span></a>
  <a data-toggle="modal"  data-target="#congeshow" ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/typecon"  ><span class="material-icons" style="color:black">  create</span></a>
  </div>
  
</div>

  


  <div class="cardi 2">
  
  <div class="card_image">
  <p text-align="center"> Gestion Type Documents </p>
    <img src="https://cdn.icon-icons.com/icons2/1379/PNG/512/foldertealdocuments_92850.png" />
    </div>
  <div class="card_title title-white">
 
  <a data-toggle="modal"  data-target="#document" ><span class="material-icons"  style="color:black">add_circle</span></a>
  <a data-toggle="modal"  data-target="#docshow"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/typedoc"  ><span class="material-icons" st style="color:black">  create</span></a>
  
  
  </div>
</div>

<div class="cardi 3">

  <div class="card_image">
  <p text-align="center">Gestion services </p>
    <img src="https://cdn.icon-icons.com/icons2/39/PNG/128/servicemanager_serviceconfig_gerentedeservicio_6020.png" />
  </div>
  <div class="card_title">
 
  <a data-toggle="modal"  data-target="#service" ><span class="material-icons" style="color:black">add_circle</span></a>
  <a data-toggle="modal"  data-target="#serser"><span class="material-icons" style="color:black">  remove_red_eye</span></a>
  <a href="/service"  ><span class="material-icons" style="color:black">  create</span></a>
   </div>
</div>
  
  <div class="cardi 4">
  <div class="card_image">
  <p text-align="center">Gestion Collaborateurs </p>
  <img src="https://cdn.icon-icons.com/icons2/1381/PNG/512/systemusers_94754.png"/>
    </div>
  <div class="card_title title-black">
  <a href="/users" ><span class="material-icons"  style="color:black" >settings</span></a>
  </div>
  </div>
   

  <div class="cardi 4">
  <div class="card_image">
  <p text-align="center">Fonctions </p>
    <img src="https://cdn.icon-icons.com/icons2/1459/PNG/512/2799208-bag-business_99786.png" />
    </div>
  <div class="card_title title-black">
   
  <a data-toggle="modal"  data-target="#document" ><span class="material-icons"  style="color:black">add_circle</span></a>
  <a data-toggle="modal"    ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/users"  ><span class="material-icons" st style="color:black">  create</span></a>
  </div>
  </div>
</div>

<!--  -->


















<!-- type conge -->
<div class="modal fade" id="conge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
 
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
<!--  -->

<!-- service -->
<div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!-- document -->
<div class="modal fade" id="document" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un type de document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="typedoc" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">name</label> <br>
            <input type="text"  name="name" class="form-control" id="recipient-name">
           
          </div>
          <div class="form-group">
         
            <label for="recipient-name" class="col-form-label">Periodicité</label> 
            <select name="periode" class="form-control" id="exampleFormControlSelect1">
      <option value="  An">ans</option>
      <option value="mois">mois</option>
    
    </select>
          </div>
         
          <div class="form-group">
 
            <label for="recipient-name" class="col-form-label">Nombre maximal par periode</label><br>
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

<!-- service -->

<!-- service show -->
<div class="modal fade" id="serser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Gestion Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
       

          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-userid="{{$service->id}}" data-toggle="modal" data-target="#delete" >
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
  <!-- document -->


<div class="modal fade" id="docshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gestion Documents Administratives</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-hover">
                  
                    <thead class="text-success">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Nombre maximale   <br> par Periode</th>
                        <th>Periode( Year/Month)</th>
           
                    </thead>
                    <tbody>
                      
                         @if(count($typedocuments)>0)
                    @foreach($typedocuments as $typedocument)
    <tr>
      <td >{{$typedocument->id}}</td>
      <td>{{$typedocument->name}}</td>
      <td>{{$typedocument->max}}</td>
      <td>{{$typedocument->periode}}</td>
    
      
    </tr>
   
                    
                    @endforeach
                    @else
                    <td >no data</td>
      <td>no data</td>

@endif
</tbody>
                  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="congeshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gestion des Types conges</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-hover">
                 
                    <thead class="text-success">
                      <th>ID</th>
                     <th>Name</th> 
                 
                     
                    </thead>
                    <tbody>
                      
                   
                    @foreach($typeconges as $typeconges)
    <tr>
      <td >{{$typeconges->id}}</td>
      <td>{{$typeconges->nom}}</td>

     
      
    </tr>
   @endforeach

                    </tbody>
                  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
  
    
    


@endsection
