@extends('layouts.app')
@section('subtitle', 'Admin Panel')
@section('description', 'Discreet Drop admin panel.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row btn-toolbar">
        <div class="col-sm-8 col-sm-offset-2">
            <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/admin/incoming-package';">New Incoming Package</button>
        </div>
    </div>
    <div class="row btn-toolbar">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-default btn-block btn-lg" onclick="location.href='/admin/users';">Users List</button>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-default btn-block btn-lg" onclick="location.href='/admin/orders';">Existing Orders</button>
        </div>
    </div>
    <div class="row btn-toolbar">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-default btn-block btn-lg" onclick="#">Add Box Type</button>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-default btn-block btn-lg" onclick="#">Manage Boxes</button>
        </div>
    </div>
    <div class="row btn-toolbar">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-default btn-block btn-lg" onclick="#">Update DD Info</button>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-default btn-block btn-lg" onclick="#">Manual Shipment</button>
        </div>
    </div>
</div>
@endsection


@section('footer')

@endsection