@extends('layouts.app')
@section('subtitle', 'User Panel')
@section('description', 'User panel.')


@section('header')

@endsection
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h2 class="center">User #{{$user->id}}</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <P><strong>Email:</strong> {{$user->email}}</P>
                    <P><strong>Substantiated At:</strong> {{$user->substantiated_at}}</P>
                    <P><strong>DD Code:</strong> {{$user->dd_code}}</P>
                    <P><strong>First Name:</strong> {{$user->first_name}}</P>
                    <P><strong>Last Name:</strong> {{$user->last_name}}</P>
                    <P><strong>Address 1:</strong> {{$user->address_1}}</P>
                    <P><strong>Address 2:</strong> {{$user->address_2}}</P>
                    <P><strong>City:</strong> {{$user->city}}</P>
                    <P><strong>State:</strong> {{$user->state}}</P>
                    <P><strong>Zip Code:</strong> {{$user->zip_code}}</P>
                    <P><strong>Phone:</strong> {{$user->phone}}</P>
                    <P><strong>Stripe ID:</strong> {{$user->stripe_id}}</P>
                    <P><strong>Stripe Default Source:</strong> {{$user->stripe_default_source}}</P>
                    <P><strong>Stripe Brand:</strong> {{$user->stripe_brand}}</P>
                    <P><strong>Stripe Exp Month:</strong> {{$user->stripe_exp_month}}</P>
                    <P><strong>Stripe Exp Year:</strong> {{$user->stripe_exp_year}}</P>
                </div>
            </div>
            
            
            <h3>User Orders:</h3>
            @foreach($user->Incoming_Packages as $incoming_package)
                    <a href="/admin/orders/{{$incoming_package->Order->id}}">Order #{{$incoming_package->Order->id}} - {{$incoming_package->Order->order_status}}</a> <br>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection