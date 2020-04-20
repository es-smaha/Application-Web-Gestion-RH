@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
    <div class="row">
    
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <img src="../assets/img/servi.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gestion de services</h5>
    <a href="/service" class="btn btn-success">voir plus</a>
  </div>
</div>
        
        </div>

            <div class="col-4">
            
            <div class="card" style="width: 18rem;">
  <img src="../assets/img/doc.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gestion de type de documents</h5>
    <a href="/typedoc" class="btn btn-success">voir plus</a>
  </div>
</div>
            
            </div>
    
    
    
               
                <div class="col-4">
                
                <div class="card" style="width: 18rem;">
  <img src="../assets/img/conge.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gestion de type de conges</h5>
    <a href="/typecon" class="btn btn-success">voir plus</a>
  </div>
</div>
                
                
                
                </div>
    
    
    
    
    </div>




@endsection



