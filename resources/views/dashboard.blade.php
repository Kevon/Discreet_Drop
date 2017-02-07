@extends('layouts.app')
@section('subtitle', 'Guarantee Discreet Shipping on Any Package')
@section('description', 'Hide logos, return labels, invoices, holes, and all other identifying information on any package from any seller so your item arrives as discreet as possible.')


@section('header')

@endsection


@section('content')

<div class="container content">
    <div class="row">
        <div class="col-sm-3">
            <button class="btn btn-primary btn-block" onclick="location.href='/register'">Create a New Order</button>
            <button class="btn btn-default btn-block" onclick="location.href='/login_info'">Edit Login Info</button>
            <button class="btn btn-default btn-block" onclick="location.href='/profile_info'">Update Shipping Profile</button>
            <button class="btn btn-default btn-block" onclick="location.href='/tutorial'">How-To Tutorial</button>
            
            <br>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="center">Your Discreet Drop address is:</h4>
                            <p>
                                {{$dd_info->name}} <br>
                                {{$dd_info->address_1}} <br>
                                {{$dd_info->address_2}} - {{$user->dd_code}} <br>
                                {{$dd_info->city}} {{$dd_info->state}}, {{$dd_info->zip_code}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <h5>Ship your packages to that address, and we'll take care of hiding all identifying information and logos.</h5>
            <p>Once we receive your package, we'll automatically box, charge, and ship your item out to you completely discreet via USPS at the lowest possible rate.</p>
        </div>
        
        <div class="col-sm-9">
            
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Order created, waiting arrival.</a></div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    @include('partials.progress')
                                </div>
                                <div class="col-md-8">
                                    <h2>Order Status: Pending</h2>
                                    
                                    <hr>
                                    
                                    <h4>Incoming Package Details</h4>
                                    <P><strong>Received on: </strong>Pending</P>
                                    <P><strong>Sender: </strong>Pending</P>
                                    <P><strong>Carrier: </strong>Pending</P>
                                    <P><strong>Tracking Number: </strong>Pending</P>

                                    <hr>
                                    
                                    <h4>Credit Card Charge Details</h4>
                                    <P><strong>Charge Status: </strong>Pending</P>
                                    <P><strong>Charged on: </strong>Pending</P>
                                    <P><strong>Shipping amount charged: </strong>Pending</P>
                                    <P><strong>Last 4: </strong>Pending</P>
                                    
                                    <hr>
                                    
                                    <h4>Outgoing Shipment Details</h4>
                                    <P><strong>Carrier: </strong>Pending</P>
                                    <P><strong>Tracking Number: </strong>Pending</P>
                                    <P><strong>Estimated Shipping Time: </strong>Pending</P>
                                </div>
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