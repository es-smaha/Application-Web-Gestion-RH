@extends('layouts.nav4')
@section('title')

@endsection

@section('content')

        <div class="container-fluid">

    
    <div class="col-12">
    <h4> Ajouter une demande de congé</h4>
<form method="POST" action="/doc">
@csrf

<div class="form-group col-md-4">
      <label for="typedocument_id">choisissez un type de document</label>
      <select name="typedocument_id" id="inputState" class="form-control">

      @foreach($typedoc as $doc)
        <option value="{{$doc->id}}" > {{$doc->name}}</option>
       @endforeach

      </select>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Effectuer</button>
</form>
</div>
</div>



<div class="row">
    <div class=col-12>
    <table class="table table-dark">
  <thead>
    <tr>
      <th>nom de demandeur</th>
      <th scope="col">mes demandes</th>
      <th scope="col">la date de creation</th>
      <th scope="col">l'état</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach( $demandedocuments as $dec)
    
    @if(auth::user()->id==$dec->user_id)
      <td>{{$dec->user->name}}</td>
      <td>{{$dec->typedocument->name}}</td>
      <td>{{$dec->created_at}}</td>
      @if($dec->etat==0)
      <td>En attente</td>
      @else
      <td>Valide</td>
      @endif
    </tr>
   
   @endif
    @endforeach
  </tbody>
</table>
    
    </div>

</div>
</div>


@endsection
@section('scripts')
@endsection