@extends('layouts.nav2')
@section('title')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/save-agents">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('prenom') }}</label>

                            <div class="col-md-8">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('adress') }}</label>

                            <div class="col-md-8">
                                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus>

                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cne" class="col-md-4 col-form-label text-md-right">{{ __('cne') }}</label>

                            <div class="col-md-8">
                                <input id="cne" type="text" class="form-control @error('cne') is-invalid @enderror" name="cne" value="{{ old('cne') }}" required autocomplete="cne" autofocus>

                                @error('cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ko" class="col-md-4 col-form-label text-md-right">{{ __('matricule /ko') }}</label>

                            <div class="col-md-8">
                                <input id="ko" type="text" class="form-control @error('ko') is-invalid @enderror" name="ko" value="{{ old('ko') }}" required autocomplete="ko" autofocus>

                                @error('ko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      

                        <div class="form-group row">
                            <label for="poste" class="col-md-4  text-md-right">{{ __('poste') }}</label>

                            <div class="col-md-8">
                                <input id="poste" type="text" class="form-control @error('poste') is-invalid @enderror" name="poste" value="{{ old('poste') }}" required autocomplete="poste" autofocus>

                                @error('poste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_id" class="col-md-4  text-md-right">{{ __('Nom service') }}</label>

                            <div class="col-md-8">
                            <select name="service_id" id="service" class="form-control">
                                @foreach($service as $service )
                                    <option value="{{$service->id}}">{{$service->nom}}</option>

                                @endforeach
                                </select>
                            </div>
                        </div>
                               
                               

                        <div class="form-group row">
                            <label for="tele" class="col-md-4 col-form-label text-md-right">{{ __('tele') }}</label>

                            <div class="col-md-8">
                            <input id="tele" type="text" class="form-control @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}" required autocomplete="tele" autofocus>

                                @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateembauche" class="col-md-4 col-form-label text-md-right">{{ __('Date Embauche') }}</label>

                            <div class="col-md-8">
                                <input id="dateembauche" type="date" class="form-control @error('dateembauche') is-invalid @enderror" name="dateembauche" value="{{ old('dateembauche') }}" required autocomplete="dateembauche">

                                @error('dateembauche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    

                        <div class="form-group row">
                            <label for="solde" class="col-md-4 col-form-label text-md-right">{{ __('solde') }}</label>

                            <div class="col-md-8">
                                <input id="solde" type="string" class="form-control @error('solde') is-invalid @enderror" name="solde" value="{{ old('solde') }}" required autocomplete="solde">

                                @error('solde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salaire" class="col-md-4 col-form-label text-md-right">{{ __('salaire') }}</label>

                            <div class="col-md-8">
                                <input id="salaire" type="string" class="form-control @error('salaire') is-invalid @enderror" name="salaire" value="{{ old('salaire') }}" required autocomplete="salaire">

                                @error('salaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Agent') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection