@extends('layouts.nav4')
@section('title')
Dashboard
@endsection
@section('content')

<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">exit_to_app</i>
                  </div>
                  <p class="card-category">Demander un congé</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                  <a href="/conge"><span class="material-icons" style="color:black" >add_circle</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Demander un Document <br> <br></p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                  <a   href="/doc" ><span class="material-icons"  style="color:black">add_circle</span></a>
  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <i class="fa fa-exclamation-circle"></i> 
                  </div>
                  <p class="card-category">Ajouter Reclamation/suggestion</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                  <a href="/reclamation" ><span class="material-icons" style="color:black">add_circle</span></a>
  
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_circle</i>
                  </div>
                  <p class="card-category">Visiter Profil</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="/profil"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <p class="card-category">Visiter Calendrier</p>
                 </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="/calendar-employee"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                  <i class="fa fa-table"></i>
                  </div>
                  <p class="card-category">Visiter Le Planning de Travail</p>
                 
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="/planningR"  ><span class="material-icons"  style="color:black">remove_red_eye</span></a>
  
                  </div>
                </div>
              </div>
            </div>
          </div>



@endsection