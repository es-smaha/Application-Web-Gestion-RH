@extends('layouts.nav2')
@section('title')
    
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

  <div class="card_image"> <img src="https://cdn.icon-icons.com/icons2/9/PNG/256/calendar_office_day_1474.png" /> </div>
  <div class="card_title title-white">
  <a  data-toggle="modal"  data-target="#conge"><span class="material-icons" style="color:black" >add_circle</span></a>
  <a data-toggle="modal"  data-target=".congeshow" ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/typedoc"  ><span class="material-icons" style="color:black">  create</span></a>
  </div>
  
</div>
  


  <div class="cardi 2">
  <div class="card_image">
    <img src="https://icon-icons.com/icons2/9/PNG/256/product_document_file_1512.png" />
    </div>
  <div class="card_title title-white">
  <a data-toggle="modal"  data-target="#document" ><span class="material-icons"  style="color:black">add_circle</span></a>
  <a data-toggle="modal"  data-target=".docshow"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/typecon"  ><span class="material-icons" st style="color:black">  create</span></a>
  
  
  </div>
</div>

<div class="cardi 3">

  <div class="card_image">
    <img src="https://cdn.icon-icons.com/icons2/1603/PNG/512/luggage-work-office-suitcase-brief-case_108567.png" />
  </div>
  <div class="card_title">
  <a data-toggle="modal"  data-target="#service" ><span class="material-icons" style="color:black">add_circle</span></a>
  <a data-toggle="modal"   data-target=".serviceshow" ><span class="material-icons" style="color:black">  remove_red_eye</span></a>
  <a  href="/service"  ><span class="material-icons" style="color:black">  create</span></a>
   </div>
</div>
  
  <div class="cardi 4">
  <div class="card_image">
    <img src="https://cdn.icon-icons.com/icons2/121/PNG/256/users_folder_19898.png" />
    </div>
  <div class="card_title title-black">
  <a href="/users" ><span class="material-icons"  style="color:black" >settings</span></a>
  </div>
  </div>
   

  <div class="cardi 4">
  <div class="card_image">
    <img src="https://cdn.icon-icons.com/icons2/1670/PNG/512/10303manofficeworkerlightskintone_110631.png" />
    </div>
  <div class="card_title title-black">
  <a data-toggle="modal"  data-target="#document" ><span class="material-icons"  style="color:black">add_circle</span></a>
  <a data-toggle="modal"  data-target=".docshow"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  <a  href="/users"  ><span class="material-icons" st style="color:black">  create</span></a>
  </div>
  </div>
</div>















<!-- type conge -->
<div class="modal fade" id="conge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text"  name="name" class="form-control" id="recipient-name">
           
          </div>
          <div class="form-group">
         
            <label for="recipient-name" class="col-form-label">Periodicite( par an ou par mois )</label>
            <input type="text"  name="periode" class="form-control" id="recipient-name">

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

<!-- typeconge -->


<div class="modal fade congeshow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
  
    <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Type De Document</h4>
                
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                 
                    <thead class="text-success">
                      <th>ID</th>
                     <th>Name</th> 
                     <th><th>
                     
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
                  </div>
                </div>
            

    </div>
  </div>
</div>
<!--  -->
<div class="modal fade docshow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
  
                <div class="card-body table-responsive">
                 
<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Type De Document</h4>
                
                </div>
             
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                  
                    <thead class="text-success">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Nombre maximale   <br> par Periode</th>
                        <th>Periode( Year/Month)</th>
                        
                      <th>action</th>
                    </thead>
                    <tbody>
                      
                         @if(count($typedocuments)>0)
                    @foreach($typedocuments as $typedocument)
    <tr>
      <td >{{$typedocument->id}}</td>
      <td>{{$typedocument->name}}</td>
      <td>{{$typedocument->max}}</td>
      <td>{{$typedocument->periode}}</td>
      <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="Editer" data-toggle="modal"  data-target="#edit" class="btn btn-success btn-link btn-sm">
            <i class="material-icons">edit</i> </button>

          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-userid="{{$typedocument->id}}" data-toggle="modal" data-target="#delete" >
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
            

    </div>
  </div>
</div>
    </div>
<!-- lllll -->
<div class="modal fade serviceshow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
  
                <div class="card-body table-responsive">
                 
<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Type De Document</h4>
                
                </div>
             
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                  
                    <thead class="text-success">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Nombre maximale   <br> par Periode</th>
                        <th>Periode( Year/Month)</th>
                        
                      <th>action</th>
                    </thead>
                    <tbody>
           
  
   
               
</tbody>
                  </table>
                    </div>
                  </div>
                </div>
            

    </div>
  </div>
</div>
    </div>










@endsection

@section('scripts')
  
    
    


@endsection
