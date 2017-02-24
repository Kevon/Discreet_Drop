@extends('layouts.app')
@section('subtitle', 'New Incoming Package')
@section('description', 'Enter a new incoming package.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row">
        <h1 class="center">Enter New Incoming Package</h1>
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/admin/incoming_package/save') }}" autocomplete="on">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('carrier') ? ' has-error' : '' }}">
                            <label for="carrier">Carrier</label>
                            <input id="carrier" type="text" class="form-control input-lg" name="carrier" value="{{ old('carrier', isset($user->carrier) ? $user->carrier : '') }}" required>

                            @if ($errors->has('carrier'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('carrier') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('tracking_number') ? ' has-error' : '' }}">
                            <label for="tracking_number">Tracking Number</label>
                            <input id="tracking_number" type="text" class="form-control input-lg" name="tracking_number" value="{{ old('tracking_number', isset($user->tracking_number) ? $user->tracking_number : '') }}"required>

                            @if ($errors->has('tracking_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tracking_number') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('dd_code') ? ' has-error' : '' }}">
                            <label for="dd_code">Discreet Drop Code</label>
                            <input id="dd_code" type="tel" class="form-control input-lg" name="dd_code" maxlength="6" value="{{ old('dd_code', isset($user->dd_code) ? $user->dd_code : '') }}" required>

                            @if ($errors->has('dd_code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dd_code') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('sender') ? ' has-error' : '' }}">
                            <label for="sender">Sender</label>
                            <input id="sender" type="text" class="form-control input-lg" name="sender" value="{{ old('sender', isset($user->sender) ? $user->sender : '') }}" required>

                            @if ($errors->has('sender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sender') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-sm-3 form-group{{ $errors->has('length') ? ' has-error' : '' }}">
                                <label for="length">Length (in)</label>
                                <input id="length" type="tel" class="form-control input-lg" name="length" maxlength="2" value="{{ old('length', isset($user->length) ? $user->length : '') }}" required>

                                @if ($errors->has('length'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('length') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-3 form-group{{ $errors->has('width') ? ' has-error' : '' }}">
                                <label for="width">Width (in)</label>
                                <input id="width" type="tel" class="form-control input-lg" name="width" maxlength="2" value="{{ old('width', isset($user->width) ? $user->width : '') }}" required>

                                @if ($errors->has('width'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('width') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-3 form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                                <label for="height">Height (in)</label>
                                <input id="height" type="tel" class="form-control input-lg" name="height" maxlength="2" value="{{ old('height', isset($user->height) ? $user->height : '') }}" required>

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-3 form-group{{ $errors->has('weight_in_oz') ? ' has-error' : '' }}">
                                <label for="weight_in_oz">Weight (oz)</label>
                                <input id="weight_in_oz" type="tel" class="form-control input-lg" name="weight_in_oz" maxlength="4" value="{{ old('weight_in_oz', isset($user->weight_in_oz) ? $user->weight_in_oz : '') }}" required>

                                @if ($errors->has('weight_in_oz'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight_in_oz') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row btn-toolbar">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Saving Changes">Save Package</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js" integrity="sha256-bEuhxmK0QLOu/l5RR+ot9y+A5RDkl5xlSFp7D/+JTjc=" crossorigin="anonymous"></script>
<script src="/js/user.js"></script>
<script src="/js/admin.js"></script>
@endsection