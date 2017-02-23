@extends('layouts.app')
@section('subtitle', 'Admin')
@section('description', 'Discreet Drop admin page.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row btn-toolbar equal-height">
        <div class="col-sm-3 col-sm-offset-3">
            <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/admin/incoming_package';">New Incoming Package</button>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-default btn-block btn-lg" onclick="location.href='/admin/orders';">Existing Orders</button>
        </div>
    </div>
</div>
@endsection


@section('footer')

@endsection