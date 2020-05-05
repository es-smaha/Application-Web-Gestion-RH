
@extends('layouts.nav1')
@section('title')
Home
@endsection

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
              <p class="card-category">Les Demandes de document administratif</p>
              
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
              <p class="card-category">Les Demandes de congé</p>
              
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i>
                <a href="/demande-conge">voir plus...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-orange card-header-icon">
              <div class="card-icon">
                <i class="material-icons">event</i>
              </div>
              <br><br><br>
              <p class="card-category">Calendrier</p>
              
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i>
                <a href="/events">voir plus...</a>
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
              <p class="card-category">Les reclamations</p>
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
              <p class="card-category"> le planning de travail</p>
              </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">keyboard_arrow_right</i> <a href="/ex">voir plus...</a>
              </div>
          </div>
        </div>
      </div>
  
@endsection

@section('scripts')

@endsection
