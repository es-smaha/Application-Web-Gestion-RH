@extends('loglog')
@section('div')
Change your <br><b style="color:#2E8B57">Password</b>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                

             
                    <form method="POST" action="/update-password">
                        @csrf

                        <div class="form-group row">
                            <label for="oldpassword" class="col-md-6 col-form-label text-md-right">{{ __('Old Password') }}</label>

                            <div class="col-md-12">
                                <input id="oldpassword" type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" required autocomplete="new-password">

                                @error('oldpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         


                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save changing') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
       

@endsection