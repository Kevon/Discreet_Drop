<div class="panel panel-default">
    <div class="panel-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$order->id}}">
        @if($order->id == 0)
            Order Demo-8675309, created on {{$user->created_at}}
        @else
            Order {{$user->dd_code}}-{{$order->id}}, created on {{$order->created_at}}
        @endif
        </a>
    </div>
    <div id="collapse-{{$order->id}}" class="panel-collapse collapse in">
        <div class="panel-body">

            <div class="row">
                
                <div class="col-md-8 col-md-push-4">
                    <h2>Order Status: {{$order->status or "Pending"}}</h2>
                    @if($order->id == 0)
                        <h4>Order Number: Demo-8675309</h4>
                    @else
                        <h4>Order Number: {{$user->dd_code}}-{{$order->id}}</h4>
                    @endif
                    
                    <hr>

                    <h4>Incoming Package Details</h4>
                    <P><strong>Received On: </strong>Pending</P>
                    <P><strong>Sender: </strong>Pending</P>
                    <P><strong>Carrier: </strong>Pending</P>
                    <P><strong>Tracking Number: </strong>Pending</P>

                    <hr>

                    <h4>Credit Card Charge Details</h4>
                    <P><strong>Charge Status: </strong>Pending</P>
                    <P><strong>Charged On: </strong>Pending</P>
                    <P><strong>Shipping Amount Charged: </strong>Pending</P>
                    <P><strong>Last 4: </strong>Pending</P>

                    <hr>

                    <h4>Outgoing Shipment Details</h4>
                    <P><strong>Carrier: </strong>Pending</P>
                    <P><strong>Sent On: </strong>Pending</P>
                    <P><strong>Tracking Number: </strong>Pending</P>
                    <P><strong>Estimated Shipping Time: </strong>Pending</P>
                </div>
                
                <div class="col-md-4 col-md-pull-8">
                    @include('partials.progress')
                    
                    @if($order->id != 0)
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