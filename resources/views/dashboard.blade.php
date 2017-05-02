@extends('layouts.app')
@section('subtitle', 'Dashboard')
@section('description', 'Your Discreet Drop Dashboard.')


@section('header')

@endsection


@section('content')

<div class="container content">
    <h1 class="center">Dashboard</h1>
    <br>
    <div class="row">
        <div class="col-sm-3">
            @if($user->role == "ADMIN")
                <button class="btn btn-primary btn-block" onclick="location.href='/admin'">Admin Panel</button>
                <hr>
            @endif
            @if(empty($user->substantiated_at))
                <button class="btn btn-primary btn-block" onclick="location.href='/profile_info'">Update Shipping Profile</button>
            @else
                <form role="form" method="POST" action="/dashboard/addOrder" id="add-order" class="btn-form-bottom">
                    {{ csrf_field() }}
                    <button class="btn btn-primary btn-block" type="submit">Create a New Order</button>
                </form>
                <button class="btn btn-default btn-block" onclick="location.href='/profile-info'">Update Shipping Profile</button>
            @endif
            <button class="btn btn-default btn-block" onclick="location.href='/login-info'">Edit Login Info</button>
            <button class="btn btn-default btn-block" onclick="location.href='/tutorial'">How-To Tutorial</button>
            <button class="btn btn-default btn-block" onclick="location.href='/trust-and-safety'">Trust and Safety Info</button>
            
            <br>
            
            @if(empty($user->substantiated_at))
                @include('partials.profile_alert')
            @else
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="center">Your Discreet Drop address is:</h4>
                                <p>{{$dd_info->dd_name}} <br>
                                {{$dd_info->address_1}} <br>
                                @if(empty($dd_info->address_2))
                                    Code - {{$user->dd_code}} <br>
                                @else
                                    {{$dd_info->address_2}} - {{$user->dd_code}} <br>
                                @endif
                                {{$dd_info->city}}, {{$dd_info->state}} {{$dd_info->zip_code}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <h4 class="center"><i class="fa fa-arrow-up" aria-hidden="true"></i></h4>
            <h5>Ship your packages to that address, and we'll take care of hiding all identifying information and logos.</h5>
            <p>Once we receive your package, we'll automatically box, charge, and ship your item out to you completely discreet via USPS at the lowest possible rate.</p>
            @endif
        </div>
        
        <div class="col-sm-9">
            @include('partials.order_accordion')
            
        </div> 

    </div>
    
</div>

@endsection


@section('footer')
<script src="/js/user.js"></script>
@endsection