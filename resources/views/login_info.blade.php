@extends('layouts.app')
@section('subtitle', 'Edit Login Info')
@section('description', 'Login to your Discreet Drop account!')


@section('header')

@endsection


@section('content')
<div class="container content">
    <h1 class="center">Edit Login Info</h1>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <form role="form" method="POST" action="{{ url('/login-info/update') }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control input-lg" autocomplete="email" name="email" value="{{ old('email', isset($user->email) ? $user->email : '') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Change Password</label>
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Leave blank to keep current password.">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="password-confirm">Confirm Changed Password</label>
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Leave blank to keep current password.">
                            </div>
                        </div>

                        <div class="row btn-toolbar">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-block btn-primary">Save Changes</button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel Changes</button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-danger btn-block delete" type="button" onclick="changeMethod()">Delete Account</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script src="/js/user.js"></script>
@endsection
