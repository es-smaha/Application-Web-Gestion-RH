@extends('layouts.nav2')
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
                <a class="nav-link active" href="#service" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">note_add</span></i> Gere les Services
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#typedocument" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> Gerer les Types des Documents
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#typeconge" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">bookmarks</span></i> Gerer les types de conges
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#fonction" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">work_outline</span></i> Gerer les fonctions 
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#agents" data-toggle="tab">
                  <i class="material-icons"><span class="material-icons">how_to_reg</span></i> Gerer les utilisateurs
                  <div class="ripple-container"></div>
                </a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </div>
  
      <div class="tab-pane" id="service">
 
  <div class="card-body">
    <h5 class="card-title">Gestion de services</h5>
    <a href="/service" class="btn btn-success">voir plus</a>
  </div>
</div>

        <div class="tab-pane" id="typedocument">
            <div class="col-6">
  
    <h5 class="card-title">Gestion de type de documents</h5>
    <a href="/typedoc" class="btn btn-success">voir plus</a>
  </div>

            </div>
    
    
    
            <div class="tab-pane" id="fonction">
               
    <h5 class="card-title">configurer les fontions</h5>
    <a href="/typecon" class="btn btn-success">Ajouter fonction</a>
  </div>

<div class="tab-pane" id="agents">
  
    <a href="/typecon" class="btn btn-success">Ajouter agent</a>
</div>




@endsection



