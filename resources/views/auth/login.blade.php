@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading center">Login</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control input-lg" autocomplete="email" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control input-lg" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    <label for="remember">Remember Me</label>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2 center">
                                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                                        <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
            
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 center">
                            <h5 class="center">Don't have an account yet?</h5>
                            <button class="btn btn-default btn-block" onclick="location.href='/register'">Sign Up For Free</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
