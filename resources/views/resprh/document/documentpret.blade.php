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
                          <a class="nav-link " href="/docum" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Les demandes non valider
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#messages" data-toggle="tab">
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
Nom D'agent
</th>
<th>
Type de document
</th>
<th>
la date de demande
</th>
<th >
etat
</th>
<th >
PDF
</th>

</thead>
<tbody>

@foreach($demandedocuments as $demandedocuments)

<tr>
<td> {{$demandedocuments->user->name}}</td>
<td> {{$demandedocuments->typedocument->name}}</td>
<td> {{$demandedocuments->created_at}}</td>

<td>    <span class="badge badge-success">pret</span></td>

@if($demandedocuments->pdf==false)
<form action="{{url('docum/'.$demandedocuments->id)}}" method="POST">
@csrf
@method("PUT")
<td> <a type="button" rel="tooltip" id="#motif"  data-toggle="modal" data-target="#pdf" title="deja Envoyer" class="btn btn-success btn-link btn-sm" >
                                                        <span class="material-icons">picture_as_pdf</span></a></td>
</form>

@else
<td> <a type="button" rel="tooltip"  title="deja Envoyer" class="btn btn-success btn-link btn-sm" disabled>
                                                        <span class="material-icons"><span class="material-icons">done_all</span>picture_as_pdf</span></a></td>
@endif
</tr>
<!-- pdf -->
<div class="modal modal-danger fade " id="pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <form  action="/pdf" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="modal-body">
            <p>Importer le document ici </p>
          <input type="hidden" name="demandedoc_id" id="user_id" value="{{$demandedocuments->id}}">
          <input type="file" name="recu" class="form-control">
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit"  onclick="md.showNotificationn('top','center')" class="btn btn-warning">yes</button>
      </div>
          
        </form>
      </div>
     
    </div>
  </div>
</div>


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
