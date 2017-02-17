@extends('layouts.app')
@section('subtitle', 'Contact Us')
@section('description', 'Contact Discreet drop, including our email address, mailing address, and phone number if you have any questions.')


@section('header')

@endsection


@section('content')

<div class="container content">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 center"> 
            <h1>I'm like "Hey, what's up? Hello!"</h1>
            <p>Questions? Comments? Bored? Feel free to contact us anytime! We'll respond as soon as possible.<br>We promise.</p>
        </div>
    </div>
    <div class="section">
        <div class="row equal-height">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body center">
                        <h4>Email Discreet Drop</h4>
                        <a href="mailto:{{$dd_info->email}}">{{$dd_info->email}}</a><br><br>
                        Contact forms are dumb. Just email us directly from your normal email client, send us attachments, whatever!
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body center">
                        <h4>Mailing Address</h4>
                        {{$dd_info->dd_name}}<br>
                        {{$dd_info->address_1}}<br>
                        {{$dd_info->address_2}}<br>
                        {{$dd_info->city}}, {{$dd_info->state}} {{$dd_info->zip_code}}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body center">
                        <h4>Phone Number</h4>
                        <p>{{$dd_info->phone}}</p><br>
                        In case you're old-fashioned. We don't judge!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer')

@endsection