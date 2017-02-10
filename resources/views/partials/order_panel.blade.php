<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" class="accordion-toggle" data-parent="#accordion" href="#collapse{{$order->id or 0}}">
                @if($demo)
                    Demo Order
                @else
                    Order {{$user->dd_code}}-{{$order->id}} --- Created on {{$order->created_at}}
                @endif
            </a>
        </h4>
    </div>
    <div id="collapse{{$order->id or 0}}" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-push-4">
        
                    @if($demo)
                        <h2>Order Status: Demo Order</h2>
                        <h4>Order Number: Demo-8675309</h4>
                    @else
                        <h2>Order Status: {{$order->status or "Pending - Awaiting for Arrival"}} @if($order->status == 'Received' or $order->status == 'Received')- Preparing for Shipment @endif</h2>
                        <h4>Order Number: {{$user->dd_code}}-{{$order->id}}</h4>
                    @endif
                    
                    <hr>

                    <h4>Incoming Package Details</h4>
                    <P><strong>Received On: </strong>@if($demo){{$user->created_at}} @else{{$order->Incoming_Package->created_at or "Pending"}}@endif</P>
                    <P><strong>Sender: </strong>@if($demo)Amazon @else{{$order->Incoming_Package->sender or "Pending"}}@endif</P>
                    <P><strong>Carrier: </strong>@if($demo)UPS @else{{$order->Incoming_Package->carrier or "Pending"}}@endif</P>
                    <P><strong>Tracking Number: </strong>@if($demo)FZ000000DEMO00000069 @else{{$order->Incoming_Package->tracking_number or "Pending"}}@endif</P>

                    <hr>

                    <h4>Credit Card Charge Details</h4>
                    <P><strong>Charge Status: </strong>@if($demo)Succeeded @else{{$order->Shipment->charge_status or "Pending"}}@endif</P>
                    <P><strong>Charged On: </strong>@if($demo){{$user->created_at}} @else{{$order->Shipment->Charge->created_at or "Pending"}}@endif</P>
                    <P><strong>Shipping Amount Charged: </strong>@if($demo)$17.38 @else{{$order->total_cost or "Pending"}}@endif</P>
                    <P><strong>Last 4: </strong>**** **** **** @if($demo)4242 @else{{$order->Shipment->Charge->stripe_source_last4 or "Pending"}}@endif</P>

                    <hr>

                    <h4>Outgoing Shipment Details</h4>
                    <P><strong>Shipped On: </strong>{{$order->Shipment->Outgoing_Package->created_at or "Pending"}}</P>
                    <P><strong>Carrier: </strong>{{$order->Shipment->Outgoing_Package->provider or "Pending"}}</P>
                    <P><strong>Tracking Number: </strong>{{$order->Shipment->Outgoing_Package->tracking_url_provider or "Pending"}}</P>
                    <P><strong>Estimated Shipping Time: </strong>{{$order->Shipment->Outgoing_Package->days or "Pending"}}</P>
                </div>
                
                <div class="col-md-4 col-md-pull-8">
                    @include('partials.progress')
                    
                    @if(!$demo)
                        <form role="form" method="POST" action="/dashboard/deleteOrder/{{$order->id}}" id="delete-order">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row btn-toolbar">
                                <button class="btn btn-danger btn-block delete" type="button" onclick="changeMethod()">Delete Order</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>