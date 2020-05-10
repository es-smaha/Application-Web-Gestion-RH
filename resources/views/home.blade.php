@extends('layouts.nav4')

@section('content')
  
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">description</i>
              </div>
              <br><br>
              <p class="card-category">Demander un document administratif</p>
              
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i>
                <a href="/doc">voir plus...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">exit_to_app</i>
              </div>
              <br><br><br>
              <p class="card-category">Demander un congé</p>
              
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i>
                <a href="/conge">voir plus...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div> <br> <br>
              <p class="card-category">Ajouter une raclamation</p>
              </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">keyboard_arrow_right</i> <a href="/reclamation">voir plus...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
                <i class="material-icons">schedule</i>
              </div> <br> <br>
              <p class="card-category">Consulter le planning de travail</p>
              </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i> <a href="/reclamation">voir plus...</a>
              </div>
          </div>
        </div>
      </div>
  

@endsection
@section('scripts')

@endsection