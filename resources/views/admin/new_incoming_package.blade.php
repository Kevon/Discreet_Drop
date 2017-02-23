@extends('layouts.app')
@section('subtitle', 'New Incoming Package')
@section('description', 'Enter a new incoming package.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row">
        <h1 class="center">Enter New Incoming Package</h1>
        <div class="col-sm-6 col-sm-offset-3">
            <form role="form" method="POST" action="{{ url('/admin/incoming_package/save') }}" autocomplete="on">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" class="form-control input-lg" autocomplete="given-name" name="first_name" value="{{ old('first_name', isset($user->first_name) ? $user->first_name : '') }}" required>

                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-sm-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" class="form-control input-lg" autocomplete="family-name" name="last_name" value="{{ old('last_name', isset($user->last_name) ? $user->last_name : '') }}"required>

                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                    <label for="address_1">Address Line 1</label>
                    <input id="address_1" type="text" class="form-control input-lg" autocomplete="address-line1" name="address_1" value="{{ old('address_1', isset($user->address_1) ? $user->address_1 : '') }}" required>

                    @if ($errors->has('address_1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address_1') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                    <label for="address_2">Address Line 2 - Optional</label>
                    <input id="address_2" type="text" class="form-control input-lg" autocomplete="address-line2" name="address_2" value="{{ old('address_2', isset($user->address_2) ? $user->address_2 : '') }}">

                    @if ($errors->has('address_2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address_2') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-5 form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city">City</label>
                        <input id="city" type="text" class="form-control input-lg" autocomplete="address-level2" name="city" value="{{ old('city', isset($user->city) ? $user->city : '') }}" required>

                        @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-sm-3 form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state">State</label>
                        <select id="state" class="form-control input-lg" autocomplete="address-level1" name="state" required>
                                @include('partials.state_list')
                        </select>

                        @if ($errors->has('state'))
                            <span class="help-block">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-sm-4 form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                        <label for="zip_code">Zip Code</label>
                        <input id="zip_code" type="tel" class="form-control input-lg" autocomplete="postal-code" name="zip_code" maxlength="10" value="{{ old('zip_code', isset($user->zip_code) ? $user->zip_code : '') }}" required>

                        @if ($errors->has('zip_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zip_code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone">Phone Number - Optional</label>
                    <input id="phone" type="tel" class="form-control input-lg" autocomplete="zip" name="phone" value="{{ old('phone', isset($user->phone) ? $user->phone : '') }}">

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row btn-toolbar">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Saving Changes">Save Incoming Package</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection


@section('footer')
<script src="/js/user.js"></script>
@endsection