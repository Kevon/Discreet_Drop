@extends('layouts.app')
@section('subtitle', 'Register for Discreet Drop and Get Discreet Shipping on All Packages')
@section('description', 'Sign up to Discreet Drop for free and get your unique Discreet Drop address to get discreet shipping on all your packages.')


@section('header')

@endsection
@section('content')
<div class="container content">
    <h1 class="center">Register For a New Account</h1>
    <br>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <form role="form" method="POST" action="{{ url('/register') }}">
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
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="row btn-toolbar">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </div>

                    </form>

                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>

                    <h5 class="center">Already have an account?</h5>
                    <div class="row btn-toolbar">
                            <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default btn-block" onclick="location.href='/login'">Log In</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
