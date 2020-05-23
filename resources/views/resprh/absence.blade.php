@extends('layouts.nav2')

@section('title')
Absence
@endsection


@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title "> Table d'agent service: </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table">
                      <thead class=" text-primary">
                            <th>matricule</th>
                             
                        <th>
                         last Name
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          action
                        </th>
                     
                      </thead>
                      <tbody>
                      @foreach($absences as $absences)
                        <tr>
                        <td>{{$absences->user->ko}}</td>
                            <td>{{$absences->user->prenom}}</td>
                            <td>{{$absences->user->name}}</td>
                            
                                
                                <td> 
                                  
                                   <button  type="button" rel="tooltip" id="#delete"  data-toggle="modal"  title="Remove" class="btn btn-success btn-link btn-sm">
                                <i  class="material-icons" class="btn btn-danger">close</i>
                              </button>
                              </form>
                              </div>
                              </td>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

                   
@endsection


@section('scripts')
@endsection