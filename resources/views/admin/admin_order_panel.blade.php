@extends('layouts.app')
@section('subtitle', 'Order Panel')
@section('description', 'Order panel.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <h1 class="center">Order #{{$order->id}} For User #{{$user->id}} - {{$order->order_status}}</h1>
    <h2 class="center">Charge Status: {{$shipment->charge_status}}</h2>
    <h2 class="center">Outgoing Package Status: {{$shipment->outgoing_package_status}}</h2>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            @if(empty($successfulOutgoingPackage))
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Process Shipment</h4>
                        <P><strong>Shipment API ID:</strong> {{$quoteShipment->id}}</P>
                        <P><strong>Shipment API Rate:</strong> ${{$quoteRate->rate}}</P>
                        <P><strong>Discreet Drop Rate:</strong> ${{number_format(($dd_info->dd_rate /100), 2, '.', ' ')}}</P>
                        <P><strong>Total Rate:</strong> ${{number_format($quoteRate->rate + number_format(($dd_info->dd_rate /100), 2, '.', ' '), 2, '.', ' ')}}</P>
                        <P><strong>Box Name:</strong> {{$box->box_name}}</P>
                        <P><strong>Box Dimensions:</strong> {{$box->length}}" x {{$box->width}}" x {{$box->height}}"</P>

                        <form role="form" method="POST" action="/admin/orders/{{$order->id}}/process-order">
                            {{ csrf_field() }}
                            <input type="hidden" name="shipment_id" value="{{$quoteShipment->id}}">
                            <input type="hidden" name="box_id" value="{{$box->id}}">
                            <div class="row btn-toolbar">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Processing Shipment">Process Shipment</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Outgoing Package</h4>
                        
                        <P><strong>Box Name:</strong> {{$successfulOutgoingPackage->Box->box_name}}</P>
                        <P><strong>Box Dimensions:</strong> {{$successfulOutgoingPackage->Box->length}}" x {{$successfulOutgoingPackage->Box->width}}" x {{$successfulOutgoingPackage->Box->height}}"</P>
                        <P><strong>Tracking Number: </strong><a href="{{$successfulOutgoingPackage->tracking_url or '#'}}" target="_blank">{{$successfulOutgoingPackage->tracking_number}}</a></P>
                        
                        <div class="row btn-toolbar">
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" onclick="window.open('{{$successfulOutgoingPackage->label_url}}');">Print Label</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-default btn-block" onclick="location.href='/admin/incoming-package';">Enter New Incoming Package</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Incoming Package Details</h4>
                    <P><strong>Incoming Package ID:</strong> {{$incoming_package->id}}</P>
                    <P><strong>Received On:</strong> {{$incoming_package->created_at}}</P>
                    <P><strong>Carrier:</strong> {{$incoming_package->carrier}}</P>
                    <P><strong>Tracking Number:</strong> {{$incoming_package->tracking_number}}</P>
                    <P><strong>DD Code:</strong> {{$incoming_package->dd_code}}</P>
                    <P><strong>Sender:</strong> {{$incoming_package->sender}}</P>
                    <P><strong>Length:</strong> {{$incoming_package->length}}"</P>
                    <P><strong>Width:</strong> {{$incoming_package->width}}"</P>
                    <P><strong>Height:</strong> {{$incoming_package->height}}"</P>
                    <P><strong>Weight:</strong> {{$incoming_package->weight_in_oz}} oz.</P>
                    @if(empty($successfulOutgoingPackage))
                        <button class="btn btn-default btn-block" onclick="location.href='/admin/incoming-package/{{$order->Incoming_Package->id}}'">Edit Package Info</button>
                    @endif
                </div>
            </div>
            
            <h3 class="center">All Charges:</h3>
            
            @foreach($charges as $charge)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Charge Details</h4>
                        <P><strong>Charge ID: </strong>{{$charge->id}}</P>
                        <P><strong>Stripe Charge Status: </strong>{{$charge->stripe_status}}</P>
                        <P><strong>Stripe ID: </strong>{{$charge->stripe_charge_id}}</P>
                        <P><strong>Charged On: </strong>{{$charge->created_at}}</P>
                        @if($charge->stripe_status != 'succeeded')
                            <P class="error"><strong>Charge Error: </strong>{{$charge->stripe_failure_code}}</P>
                            <P class="error"><strong>Charge Message: </strong>{{$charge->stripe_failure_message}}</P>
                        @endif
                        <P><strong>Amount Charged: </strong>${{number_format(($charge->stripe_amount /100), 2, '.', ' ')}}</P>
                        <P><strong>Source ID: </strong>{{$charge->stripe_source_id}}</P>
                        <P><strong>Source Brand: </strong>{{$charge->stripe_source_brand}}</P>
                        <P><strong>Source Last 4: </strong>{{$charge->stripe_source_last4}}</P>
                        <P><strong>Source Exp Month: </strong>{{$charge->stripe_source_exp_month}}</P>
                        <P><strong>Source Exp Year: </strong>{{$charge->stripe_source_exp_year}}</P>
                        <P><strong>Balance Transaction: </strong>{{$charge->stripe_balance_transaction}}</P>
                        <P><strong>Customer ID: </strong>{{$charge->stripe_customer}}</P>
                        <P><strong>Receipt Email: </strong>{{$charge->stripe_receipt_email}}</P>
                        <P><strong>Receipt Number: </strong>{{$charge->stripe_receipt_number}}</P>
                    </div>
                </div>
            @endforeach
            
            <h3 class="center">All Outgoing Packages:</h3>
            
            @foreach($outgoing_packages as $outgoing_package)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Outgoing Package Details</h4>
                        <P><strong>Outgoing Package ID: </strong>{{$outgoing_package->id}}</P>
                        <P><strong>API ID: </strong>{{$outgoing_package->api_id}}</P>
                        <P><strong>Shipped On: </strong>{{$outgoing_package->created_at}}</P>
                        <P><strong>To Name: </strong>{{$outgoing_package->to_name}}</P>
                        <P><strong>To Street 1: </strong>{{$outgoing_package->to_street1}}</P>
                        <P><strong>To Street 2: </strong>{{$outgoing_package->to_street2}}</P>
                        <P><strong>To City: </strong>{{$outgoing_package->to_city}}</P>
                        <P><strong>To State: </strong>{{$outgoing_package->to_state}}</P>
                        <P><strong>To Zip Code: </strong>{{$outgoing_package->to_zip_code}}</P>
                        <P><strong>To Phone: </strong>{{$outgoing_package->to_phone}}</P>
                        <P><strong>To Email: </strong>{{$outgoing_package->to_email}}</P>
                        <P><strong>Box Name: </strong>{{$outgoing_package->Box->box_name}}</P>
                        <P><strong>Box Length: </strong>{{$outgoing_package->Box->length}}"</P>
                        <P><strong>Box Width: </strong>{{$outgoing_package->Box->width}}"</P>
                        <P><strong>Box Height: </strong>{{$outgoing_package->Box->height}}"</P>
                        <P><strong>Weight: </strong>{{$outgoing_package->weight_in_oz}} oz.</P>
                        <P><strong>Predefined Parcel: </strong>{{$outgoing_package->predefined_package}}</P>
                        <P><strong>Label URL: </strong><a href="{{$outgoing_package->label_url or '#'}}" target="_blank">Click Here</a></P>
                        <P><strong>Rate ID: </strong>{{$outgoing_package->rate_id}}</P>
                        <P><strong>Rate: </strong>${{$outgoing_package->rate}}</P>
                        <P><strong>Carrier: </strong>{{$outgoing_package->carrier}}</P>
                        <P><strong>Service: </strong>{{$outgoing_package->service}}</P>
                        <P><strong>Delivery Days: </strong>{{$outgoing_package->delivery_days}}</P>
                        <P><strong>Delivery Date: </strong>{{$outgoing_package->delivery_date}}</P>
                        <P><strong>Package Status: </strong>{{$outgoing_package->status}}</P>
                        <P><strong>Tracker ID: </strong>{{$outgoing_package->tracker_id}}</P>
                        <P><strong>Tracking Number: </strong>{{$outgoing_package->tracking_number}}</P>
                        <P><strong>Tracking URL: </strong><a href="{{$outgoing_package->tracking_url or '#'}}" target="_blank">Click Here</a></P>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection


@section('footer')
<script src="/js/loading.js"></script>
@endsection