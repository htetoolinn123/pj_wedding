@extends('frontendtemplate')

@section('content')

<div class="container ">
    <div class="row mt-5 pt-5  justify-content-center">
        <div style="width: 100%; height: 70px;"></"></div>
        <div class="card" id="box">

         <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src="{{asset('sb-user/images/register.png')}}"
                 class="img-fluid ml-4 mt-3 "  >
            </div>
            <div class="col-lg-6 col-sm-12 " style="margin-top: 30px;">
                <h3 align="center" class="my-1 mx-3">Register Form</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row mx-3 mt-3">
                     <!--  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                     <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mx-3">
                    <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mx-3">
                           <!--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                           -->
                           <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password" >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mx-3">
                        <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection



