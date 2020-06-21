@extends('layouts.nav1')
@section('title')
Absences

@endsection
@section('title')

@endsection

@section('content')
<a href="/Allusers" class="btn btn-success"><span class="material-icons">person</span>Ajouter une absnece</a>

<div class="sectiontitle">
    <h2>Liste D'absence </h2>
    <span class="headerLine"></span>
</div>
        
                <div style="font-size:20px" class="d-flex justify-content-center">
                  
                <button class="btn btn-warning btn-sm"><span class="material-icons">keyboard_backspace</span></button>
            <script>
              document.write(new Date())
            </script>
             <button class="btn btn-warning btn-sm"> <span class="material-icons">arrow_forward</span></button>
            </div> 
           
<div class="container-fluid">
        <!-- Mes demandes de Conge  -->
      
        
              <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4  class="card-title mt-0 text-center"> Service </h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                    <thead class=" text-primary">
                          <th>
                           Matricule
                          </th>
                          <th>
                            Nom Complet
                          </th>
                          <th>
                          Jour Absente
                          </th>
                          <th>
                            Justification
                          </th>
                        
                        </thead>
                        <tbody>
                          <tr>
                           @foreach($ab as $ab)
                          <tr>
                                    <td>{{$ab->matriculeuser}}</td>
                                    <td>{{$ab->nomuser}} {{$ab->prenomuser}}</td>
                                    <td>{{$ab->date}}</td>
                                    @if($ab->justification==true)
                                    <td>Justifier</td>
                                    @else
                                    <td>Non Justifier</td>
                                    @endif
    
    
                               </tr>


                           @endforeach
                            </tr>
                            <tbody>         
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
