@extends('frontendtemplate')

@section('content')


<div class="container ">
    <div class="row mt-5 pt-5 justify-content-center">
        <div style="width: 100%; height: 70px;"></div>
        <div class="card" id="box">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('sb-user/images/login.png')}}" class="img-fluid ml-4 mt-3" width="450px;"  >
                </div>

                <div class="col-md-6 col-sm-12" style="margin-top: 30px;">
                    <h3 align="center" class="my-1 mx-3">Login Form</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mt-3 mx-3">
                           <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                           <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter E-mail Address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mx-3">
                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mx-3">
                        <div class="col-md-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0 mx-3">
                        <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-md-12 col-sm-12 text-center">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
