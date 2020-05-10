@extends('layouts.nav2')
@section('title')
 
@endsection
@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Analyse Site</li>
  </ol>
</nav>
  <div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">group</i>
                  </div>
                  <p class="card-category">Total Agent</p>
                  <h3 class="card-title">{{App\User::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">remove_red_eye</i>
                    <a href="/users">Voir liste..</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Demande document</p>
                  <h3 class="card-title">{{App\Demandedocument::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">remove_red_eye</i>
                    <a href="/docum">Voir liste..</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category"> documents valider </p>
                  <h3 class="card-title">{{App\Demandedocument::where('etat','=','0')->count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">remove_red_eye</i>
                    <a href="/docum">Voir liste..</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">documents Nonvalider</p>
                  <h3 class="card-title">{{App\Demandedocument::where('etat','=','0')->count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="/docum">Voir liste..</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Reclamation poser</p>
                  <h3 class="card-title">{{App\Reclamation::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="/reclamationn">Consulter..</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Total Type Documents</p>
                  <h3 class="card-title">{{App\Typedocument::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="/reclamationn">Consulter..</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">event</i>
                  </div>
                  <p class="card-category">total Types congee</p>
                  <h3 class="card-title">{{App\Typeconge::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="/reclamationn">Consulter..</a>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success  card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">total Service</p>
                  <h3 class="card-title">{{App\Service::count()}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="/reclamationn">Consulter..</a>
                  </div>
                </div>
              </div>
            </div>



            </div>



@endsection

@section('scripts')
 
@endsection
