@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading center">Edit Login Info</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                
                                <h4>Basic Account Information</h4>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Change Password</label>
                                    <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Leave blank to keep current password.">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Changed Password</label>
                                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Leave blank to keep current password.">
                                </div>

                                <div class="row btn-toolbar">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel Changes</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-danger btn-block delete" type="button" onclick="changeMethod()">Delete Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection