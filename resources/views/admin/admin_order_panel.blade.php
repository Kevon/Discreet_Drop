@extends('layouts.app')
@section('subtitle', 'Order Panel')
@section('description', 'Order panel.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row">
        <h1 class="center">Order #{{$order->id}} For User #{{$user->id}}</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Incoming Package Details</h4>
                    <P><strong>Incoming Package ID:</strong> {{$incoming_package->id or "Pending"}}</P>
                    <P><strong>Received On:</strong> {{$incoming_package->created_at or "Pending"}}</P>
                    <P><strong>Carrier:</strong> {{$incoming_package->carrier or "Pending"}}</P>
                    <P><strong>Tracking Number:</strong> {{$incoming_package->tracking_number or "Pending"}}</P>
                    <P><strong>DD Code:</strong> {{$incoming_package->dd_code or "Pending"}}</P>
                    <P><strong>Sender:</strong> {{$incoming_package->sender or "Pending"}}</P>
                    <P><strong>Length:</strong> {{$incoming_package->length or "Pending"}}"</P>
                    <P><strong>Width:</strong> {{$incoming_package->width or "Pending"}}"</P>
                    <P><strong>Height:</strong> {{$incoming_package->height or "Pending"}}"</P>
                    <P><strong>Weight:</strong> {{$incoming_package->weight_in_oz or "Pending"}} oz.</P>
                    <button class="btn btn-default btn-block" onclick="location.href='/admin/incoming_package/{{$order->Incoming_Package->id}}'">Edit Package Info</button>
                </div>
            </div>
            
            @if(count($successfulOutgoingPackages) == 0)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Process Shipment</h4>
                        <P><strong>Shipment API ID:</strong> {{$quoteShipment->id or "Pending"}}</P>
                        <P><strong>Shipment API Rate:</strong> ${{$quoteRate->rate or "Pending"}}</P>
                        <P><strong>Discreet Drop Rate:</strong> ${{number_format(($dd_info->dd_rate /100), 2, '.', ' ')}}</P>
                        <P><strong>Total Rate:</strong> ${{number_format($quoteRate->rate + number_format(($dd_info->dd_rate /100), 2, '.', ' '), 2, '.', ' ')}}</P>
                        <P><strong>Box Name:</strong> {{$box->box_name or "Pending"}}</P>

                        <form role="form" method="POST" action="/admin/orders/{{$order->id}}/process_order">
                            {{ csrf_field() }}
                            <input type="hidden" name="shipment_id" value="{{$quoteShipment->id}}">
                            <div class="row btn-toolbar">
                                <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Saving Changes">Process Shipment</button>
                            </div>
                        </form>

                    </div>
                </div>
            @endif
            
            <h3 class="center">Charges:</h3>
            
            @foreach($charges as $charge)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Charge Details</h4>
                        <P><strong>Charge Status: </strong>{{$charge->stripe_status or "Pending"}}</P>
                        <P><strong>Charged On: </strong>{{$charge->created_at or "Pending"}}</P>
                        @if($charge->stripe_status == 'Charge Error')
                            <P class="error"><strong>Charge Error: </strong>{{$charge->stripe_failure_code}}</P>
                            <P class="error"><strong>Charge Message: </strong>{{$charge->stripe_failure_message}}</P>
                        @endif
                        <P><strong>Amount Charged: </strong>{{$charge->stripe_amount or "Pending"}}</P>
                        <P><strong>Last 4: </strong>{{$charge->stripe_source_last4 or "Pending"}}</P>
                    </div>
                </div>
            @endforeach
            
            <h3 class="center">Outgoing Packages:</h3>
            
            @foreach($outgoing_packages as $outgoing_package)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Outgoing Package Details</h4>

                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection


@section('footer')

@endsection