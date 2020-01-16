@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card-login animated shake">
                        <h6 class="auth-header">Welcome</h6>
                         <img src="{{asset('images/logo2.png')}}" class="auth-img">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror empty" id="iconified" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row">


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror empty" id="iconified" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>


                                <button type="submit" class="btn-login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <br><br>
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                    </form>
                </div>
            </div>
@endsection
