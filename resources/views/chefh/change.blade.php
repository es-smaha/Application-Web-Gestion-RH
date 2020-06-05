@extends('layouts.nav1')
@section('title')
changer le mot de passe
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

  <form class="px-4 py-3"  method="POST" action="/update-passwordchefh" >
                        @csrf

    <div class="form-group row">
      <label class="bmd-label-floating" for="oldpassword">Mot de passe actuel</label>
      <div class="col-md-12">
      <input class="form-control @error('oldpassword') is-invalid @enderror" id="oldpassword" name="oldpassword" type="password"  >
      @error('oldpassword')
         <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
      @enderror

      </div>
    </div>

    <div class="form-group row">
      <label class="bmd-label-floating" for="password"> nouveau mot de passe</label>
      <div class="col-md-12">
      
      <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password"  >
      @error('password')
         <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
      @enderror
      </div>
    </div>

      <div class="form-group row">
      <label class="bmd-label-floating" for="passwordc">confirmation de nouveau mot de passe</label>
      <div class="col-md-12">
      <input class="form-control @error('passwordc') is-invalid @enderror" id="passwordc" name="passwordc" type="password"  >
     
      </div>
    </div>
   
    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button></div>
                        </div>
  </form>
  
</div>
                </div>
            </div>


@endsection