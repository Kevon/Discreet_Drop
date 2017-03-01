@extends('layouts.app')
@section('subtitle', 'Orders List')
@section('description', 'List all orders with an incoming package.')


@section('header')

@endsection
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @if(count($chargeErrorOrders) != 0)
                <h2 class="center">Charge Error Orders:</h2>
                @foreach($chargeErrorOrders as $shipment)
                    <a href="/admin/orders/{{$shipment->Order->id}}">Order #{{$shipment->Order->id}} - {{$shipment->Order->Incoming_Package->created_at}}</a> <br>
                @endforeach
            @endif
            
            @if(count($shipmentErrorOrders) != 0)
                <h2 class="center">Shipping Error Orders:</h2>
                @foreach($shipmentErrorOrders as $shipment)
                    <a href="/admin/orders/{{$shipment->Order->id}}">Order #{{$shipment->Order->id}} - {{$shipment->Order->Incoming_Package->created_at}}</a> <br>
                @endforeach
            @endif
            
            <h2 class="center">All Orders:</h2>
            @foreach($allOrders as $date => $value)
                <h3>{{$date}}:</h3>
                @foreach($value as $key => $order)
                    <a href="/admin/orders/{{$order->id}}">Order #{{$order->id}} - {{$order->order_status}}</a> <br>
                @endforeach
            @endforeach
            
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection