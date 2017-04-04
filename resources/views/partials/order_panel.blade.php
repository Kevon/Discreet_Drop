<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" class="accordion-toggle" data-parent="#accordion" href="#collapse{{$order->id or 0}}">
                @if($demo)
                    Demo Order
                @else
                    Order {{$user->dd_code}}-{{$order->id}} --- Created on {{$order->created_at->format('M j, Y')}}
                @endif
            </a>
        </h4>
    </div>
    <div id="collapse{{$order->id or 0}}" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-push-4">
        
                    @if($demo)
                        <h2 class="flush">Order Status: Demo Order</h2>
                        <h4>Order Number: Demo-8675309</h4>
                    @else
                        <h2 class="flush">Order Status: {{$order->order_status}}</h2>
                        <h4>Order Number: {{$user->dd_code}}-{{$order->id}}</h4>
                    @endif
                    
                    <hr>
                    
                    <h4>Incoming Package Details</h4>
                    @if($demo)
                        <P><strong>Incoming Package Status: </strong>Received</P>
                        <P><strong>Received On: </strong>{{$user->created_at->format('M j, Y')}}</P>
                        <P><strong>Sender: </strong>Amazon</P>
                        <P><strong>Carrier: </strong>UPS</P>
                        <P><strong>Tracking Number: </strong>FZ000000DEMO00000069</P>
                        <P><strong>Package Dimensions: </strong>18 x 12 x 8</P>
                        <P><strong>Package Weight: </strong>120 oz.</P>
                    @else
                        @if($order->incoming_package_status == "Received")
                            <P><strong>Incoming Package Status: </strong>{{$order->incoming_package_status}}</P>
                            <P><strong>Received On: </strong>{{$order->Incoming_Package->created_at->format('M j, Y')}}</P>
                            <P><strong>Sender: </strong>{{$order->Incoming_Package->sender}}</P>
                            <P><strong>Carrier: </strong>{{$order->Incoming_Package->carrier}}</P>
                            <P><strong>Tracking Number: </strong>{{$order->Incoming_Package->tracking_number}}</P>
                            <P><strong>Package Dimensions: </strong>{{$order->Incoming_Package->length}} x {{$order->Incoming_Package->width}} x {{$order->Incoming_Package->height}}</P>
                            <P><strong>Package Weight: </strong>{{$order->Incoming_Package->weight_in_oz}} oz.</P>
                        @else
                            <P><strong>Incoming Package Status: </strong>Pending - Waiting for Arrival!</P>
                            <P><strong>Received On: </strong>Pending</P>
                            <P><strong>Sender: </strong>Pending</P>
                            <P><strong>Carrier: </strong>Pending</P>
                            <P><strong>Tracking Number: </strong>Pending</P>
                            <P><strong>Package Dimensions: </strong>Pending</P>
                            <P><strong>Package Weight: </strong>Pending</P>
                        @endif
                    @endif

                    <hr>

                    <h4>Credit Card Charge Details</h4>
                    @if($demo)
                        <P><strong>Charge Status: </strong>Charged - Preparing for Shipment!</P>
                        <P><strong>Charged On: </strong>{{$user->created_at->format('M j, Y')}}</P>
                        <P><strong>Shipping Amount Charged: </strong>$17.38</P>
                        <P><strong>Card Brand: </strong>Demo Brand</P>
                        <P><strong>Last 4: </strong>**** **** **** 4242</P>
                        <P><strong>Card Expiration Date: </strong>08/2021</P>
                    @elseif(!empty($order->Shipment))
                        @if($order->Shipment->charge_status == "Charged")
                            <P><strong>Charge Status: </strong>{{$order->Shipment->charge_status}} - Preparing for Shipment!</P>
                            <P><strong>Charged On: </strong>{{$order->Shipment->Latest_Charge->created_at->format('M j, Y')}}</P>
                            <P><strong>Shipping Amount Charged: </strong>${{number_format(($order->total_cost /100), 2, '.', ' ')}}</P>
                            <P><strong>Card Brand: </strong>{{$order->Shipment->Latest_Charge->stripe_source_brand}}</P>
                            <P><strong>Last 4: </strong>**** **** **** {{$order->Shipment->Latest_Charge->stripe_source_last4}}</P>
                            <P><strong>Card Expiration Date: </strong>{{$order->Shipment->Latest_Charge->stripe_source_exp_month}}/{{$order->Shipment->Latest_Charge->stripe_source_exp_year}}</P>
                        @elseif($order->Shipment->charge_status == "Charge Error")
                            <P class="error"><strong>Charge Status: </strong>{{$order->Shipment->charge_status}} - Need Updated Payment Info!</P>
                            <P class="error"><strong>Charged On: </strong>{{$order->Shipment->Latest_Charge->created_at->format('M j, Y')}}</P>
                            <P class="error"><strong>Error Message: </strong>{{$order->Shipment->Latest_Charge->stripe_failure_message}}</P>
                            <P class="error"><strong>Shipping Amount Charged: </strong>${{number_format(($order->total_cost /100), 2, '.', ' ')}}</P>
                            <P class="error"><strong>Card Brand: </strong>{{$order->Shipment->Latest_Charge->stripe_source_brand}}</P>
                            <P class="error"><strong>Last 4: </strong>**** **** **** {{$order->Shipment->Latest_Charge->stripe_source_last4}}</P>
                            <P class="error"><strong>Card Expiration Date: </strong>{{$order->Shipment->Latest_Charge->stripe_source_exp_month}}/{{$order->Shipment->Latest_Charge->stripe_source_exp_year}}</P>
                            <P class="error"><strong>Update Payment Info: <a href="/profile_info">Click Here</a></strong></P>
                        @endif
                    @else
                        <P><strong>Charge Status: </strong>Pending</P>
                        <P><strong>Charged On: </strong>Pending</P>
                        <P><strong>Shipping Amount Charged: </strong>Pending</P>
                        <P><strong>Card Brand: </strong>Pending</P>
                        <P><strong>Last 4: </strong>Pending</P>
                        <P><strong>Card Expiration Date: </strong>Pending</P>
                    @endif

                    <hr>
                    
                    <h4>Outgoing Shipment Details</h4>
                    @if(!empty($order->Shipment))
                        @if($order->Shipment->outgoing_package_status == "Shipped" or $order->Shipment->outgoing_package_status == "Delivered")
                            <P><strong>Shipment Status: </strong>{{$order->Shipment->outgoing_package_status}}!</P>
                            <P><strong>Shipped On: </strong>{{$order->Shipment->Latest_Outgoing_Package->created_at->format('M j, Y')}}</P>
                            <P><strong>Shipped To: </strong>{{$order->Shipment->Latest_Outgoing_Package->to_street1}}</P>
                            <P><strong>Carrier: </strong>{{$order->Shipment->Latest_Outgoing_Package->carrier}}</P>
                            <P><strong>Carrier Service: </strong>{{$order->Shipment->Latest_Outgoing_Package->service}}</P>
                            <P><strong>Estimated Shipping Time: </strong>{{$order->Shipment->Latest_Outgoing_Package->delivery_days}} Days</P>
                            <P><strong>Tracking Number: <a href="{{$order->Shipment->Latest_Outgoing_Package->tracking_url}}" target="_blank">{{$order->Shipment->Latest_Outgoing_Package->tracking_number}}</a></strong></P>
                            <P><strong>Package Dimensions: </strong>{{$order->Shipment->Latest_Outgoing_Package->Box->length}} x {{$order->Shipment->Latest_Outgoing_Package->Box->width}} x {{$order->Shipment->Latest_Outgoing_Package->Box->height}}</P>
                            <P><strong>Package Weight: </strong>{{$order->Shipment->Latest_Outgoing_Package->weight_in_oz}} oz.</P>
                        @elseif($order->Shipment->outgoing_package_status == "Pending")
                            <P><strong>Shipment Status: </strong>Pending</P>
                            <P><strong>Shipped On: </strong>Pending</P>
                            <P><strong>Shipped To: </strong>Pending</P>
                            <P><strong>Carrier: </strong>Pending</P>
                            <P><strong>Carrier Service: </strong>Pending</P>
                            <P><strong>Estimated Shipping Time: </strong>Pending</P>
                            <P><strong>Tracking Number: <a href="https://www.youtube.com/watch?v=ZZ5LpwO-An4" target="_blank">Pending</a></strong></P>
                            <P><strong>Package Dimensions: </strong>Pending</P>
                            <P><strong>Package Weight: </strong>Pending</P>
                        @endif
                    @else
                        <P><strong>Shipment Status: </strong>Pending</P>
                        <P><strong>Shipped On: </strong>Pending</P>
                        <P><strong>Shipped To: </strong>Pending</P>
                        <P><strong>Carrier: </strong>Pending</P>
                        <P><strong>Carrier Service: </strong>Pending</P>
                        <P><strong>Estimated Shipping Time: </strong>Pending</P>
                        <P><strong>Tracking Number: <a href="https://www.youtube.com/watch?v=ZZ5LpwO-An4" target="_blank">Pending</a></strong></P>
                        <P><strong>Package Dimensions: </strong>Pending</P>
                        <P><strong>Package Weight: </strong>Pending</P>
                    @endif
                    
                </div>
                
                <div class="col-md-4 col-md-pull-8">
                    @include('partials.progress')
                    
                    <div class="btn-toolbar">
                    @if(!empty($order->Shipment->Latest_Outgoing_Package->tracking_url))
                        <button class="btn btn-primary btn-block" onclick="location.href='{{$order->Shipment->Latest_Outgoing_Package->tracking_url or '#'}}';">Track Package</button>
                    @endif
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
</div>