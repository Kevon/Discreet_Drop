@extends('layouts.app')
@section('subtitle', 'Login To Your Discreet Drop Dashboard and Start Discreet Shipping')
@section('description', 'Discreet Drop login page. Login to access your Discreet Drop dashboard or sign up for free!')


@section('header')

@endsection
@section('content')
<div class="container content">
    <h1 class="center">Login</h1>
    <br>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control input-lg" autocomplete="email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control input-lg" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="row btn-toolbar">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 center">
                                <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>

                    </form>

                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>

                    <h5 class="center">Don't have an account yet?</h5>
                    <div class="row btn-toolbar">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default btn-block" onclick="location.href='/register'">Sign Up For Free</button>
                        </div>
                    </div>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
