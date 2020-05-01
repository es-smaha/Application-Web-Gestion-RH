@extends('layouts.nav4')

@section('content')
       


    <div class="row">
<div class="col-md-6">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-success btn-round">Edit image</a>
                </div>
              </div>
            </div>
        
     
      <div class="col-md-6">
      
 
      <div class="card card-profile">
                <div class="card-avatar">
              
                    <img class="img" src="../assets/img/ops.png" />
                  </a>
                </div>
                <div class="card-body">
                <h6 class="card-category text-gray">Deposer une Note ou bien une Reclamation</h6>
                <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contenu</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
<textarea   name="raison" class="form-control" id="message-text"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <button type="submit" class="btn btn-success">Deposer</button>
</form>
                </div>
              </div>


      </div>
   
      @endsection