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
            
            @if(empty($order->Charge) or empty($order->Outgoing_Package))
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Process Shipment</h4>
                    <button class="btn btn-primary btn-block" onclick="location.href='/admin/incoming_package/{{$order->Incoming_Package->id}}'">Charge Customer and Generate Shipment</button>
                </div>
            </div>
            @endif
            
            @if(!empty($order->Charge))
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Charge Details</h4>
                    
                </div>
            </div>
            @endif
            
            @if(!empty($order->Outgoing_Package))
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Outgoing Package Details</h4>
                    
                </div>
            </div>
            @endif
            
        </div>
    </div>
</div>
@endsection


@section('footer')

@endsection