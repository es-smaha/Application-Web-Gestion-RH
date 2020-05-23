@extends('layouts.nav1')

@section('title')
Absence
@endsection


@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title "> Table des absences </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table">
                      <thead class=" text-primary">
                        <tr>
                        <th>matricule</th>
                        <th>Nom complet</th>
                        <th> date</th>
                        <th>action</th>  </tr>
                      </thead>
                      <tbody>
                      @foreach($absences as $absences)
                        <tr>
                        <td>{{$absences->commentaire}}</td>
                            <td>{{$absences->justification}}</td>
                            <td>{{$absences->jourAbsence}}</td>
                            <!-- <td>{{$absences->user->name}}</td> -->
                            
                            <td> 
                                  
                            <button  type="button" rel="tooltip" id="#delete"  data-toggle= "modal"  title="Remove" class="btn btn-success btn-link btn-sm"><i  class="material-icons" class="btn btn-danger">close</i></button>
                              </td>
                              </tr>
                              </tbody>
                              @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

                   
@endsection


@section('scripts')
@endsection