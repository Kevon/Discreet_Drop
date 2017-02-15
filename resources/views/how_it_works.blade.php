@extends('layouts.app')
@section('subtitle', 'How it Works')
@section('description', "Learn more about how Discreet Drop works, and how easy we make it to hide logos and labels on all your orders, so you'll always receive a plain-box package.")


@section('header')
<style>.section{visibility: hidden;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@endsection


@section('content')

<div class="jumbotron top">
    <div class="container">
        <h1>100% Discreet Shipping as Easy as Possible</h1>
        <p>With our streamlined dashboard and automatic shipment processing system, we give you a unique address to ship your packages to, and Discreet Drop will take care of the rest.</p>
        <div class="btn-toolbar">
            <div class="col-sm-6 col-sm-offset-3">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
        </div>
        <i class="fa fa-angle-double-down floating" aria-hidden="true"></i>
    </div>
</div>

<div class="container content">


</div>

@endsection


@section('footer')

@endsection