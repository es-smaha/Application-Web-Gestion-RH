@extends('layouts.nav2')
@section('title')
documents administratifs
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
                          <a class="nav-link active" href="/docum" >
                            <i class="material-icons">bug_report</i> Les demandes non valider
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/document-pret" >
                            <i class="material-icons">code</i> les demandes prets
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      
                      </ul>
                    </div>
                  </div>
                </div>


<div class="content">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> Les demandes Non-Valide</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table id="example" class="table">
<thead class=" text-primary">
<th>
Demandeur
</th>
<th>
Type de document
</th>
<th>
la date de demande
</th>
<th >
valider
</th>

</thead>
<tbody>

@foreach($demandedocuments as $demandedocuments)

<tr>
<td> {{$demandedocuments->user->name}}</td>
<td> {{$demandedocuments->typedocument->name}}</td>
<td> {{$demandedocuments->created_at}}</td>
<td>
<form action="{{url('docum/'.$demandedocuments->id)}}" method="POST">
@csrf
@method("PUT")
<button class="btn btn-red" type=submit>valider</button>
</form>
</td>

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
@endsection



@section('scripts')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} )
</script>



@endsection
