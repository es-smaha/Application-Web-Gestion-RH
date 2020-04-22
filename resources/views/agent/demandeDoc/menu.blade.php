@extends('layouts.app')
@section('title')

@endsection

@section('content')

<div class="row">
    
    <div class="col-4">
    <div class="card" style="width: 18rem;">
<img src="../assets/img/servi.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Ajouter une demande</h5>
<a href="/create" class="btn btn-success">voir plus</a>
</div>
</div>
    
    </div>

        <div class="col-4">
        
        <div class="card" style="width: 18rem;">
<img src="../assets/img/doc.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Suivre les demandes</h5>
<a href="/suivre" class="btn btn-success">voir plus</a>
</div>
</div>
        
        </div>



           
            <div class="col-4">
            
            <div class="card" style="width: 18rem;">
<img src="../assets/img/conge.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Afficher l'historique des demandes</h5>
<a href="/documents" class="btn btn-success">voir plus</a>
</div>
</div>
</div>
</div>






@endsection
