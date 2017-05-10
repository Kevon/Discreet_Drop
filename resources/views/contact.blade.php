@extends('layouts.app')
@section('subtitle', 'Contact Us')
@section('description', 'Contact Discreet drop, including our email address, mailing address, and phone number if you have any questions.')


@section('header')

@endsection


@section('content')

<div class="container content">
    <div class="row">
        <div class="col-sm-12 center"> 
            <h1>I'm like "Hey, what's up? Hello!"</h1>
            <h4>Questions? Comments? Bored?</h4>
            <h4>Feel free to contact us anytime! We'll respond as soon as possible.</h4>
            <h4>We promise.</h4>
        </div>
    </div>
    <div class="section">
        <div class="row equal-height">
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Mailing Address</h4>
                                <p>{{$dd_info->dd_name}}<br>
                                {{$dd_info->address_1}}<br>
                                {{$dd_info->address_2}}<br>
                                {{$dd_info->city}}, {{$dd_info->state}} {{$dd_info->zip_code}}<br><br>
                                Send us postcards of your dogs! Or whatever.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Email Discreet Drop</h4>
                                <p><a href="mailto:{{$dd_info->email}}">{{$dd_info->email}}</a><br><br>
                                Contact forms are dumb. Just email us directly from your normal email client, send us attachments, whatever!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Phone Number</h4>
                                <p>{{$dd_info->phone}}<br><br>
                                In case you're old-fashioned. We don't judge! Just give us a call if you need any help or havy any questions, and we'll get back to you as soon as we can.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection


@section('footer')

@endsection