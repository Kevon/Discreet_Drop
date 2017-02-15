<ul class="order-progress">
    <li><div class="node current"></div><p>Discreet Drop order created.</p></li>
    <li><div class="
        divider in-progress @if($demo)current @endif @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped')current @endif @endif
        "></div></li>
    <li><div class="
        node @if($demo)current @endif @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped' or $order->order_status == 'Charged' or $order->order_status == 'Received')current @endif @endif
        "></div><p>Package received by Discreet Drop.</p></li>
    <li><div class="
        divider @if($demo)current @endif @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped')current @endif @if($order->order_status == 'Received')in-progress @endif @endif
        "></div></li>
    <li><div class="
        node @if($demo)current @endif @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped' or $order->order_status == 'Charged')current @endif @endif
        "></div><p>Credit card charged for outgoing shipment.</p></li>
    <li><div class="
        divider @if($demo)in-progress @endif @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped')current @endif @if($order->order_status == 'Charged')in-progress @endif @endif
        "></div></li>
    <li><div class="
        node @if(!$demo) @if($order->order_status == 'Delivered' or $order->order_status == 'Shipped')current @endif @endif
        "></div><p>Package double-boxed and shipped via USPS.</p></li>
    <li><div class="
        divider @if(!$demo) @if($order->order_status == 'Delivered')current @endif  @if($order->order_status == 'Shipped')in-progress @endif @endif
        "></div></li>
    <li><div class="
        node @if(!$demo) @if($order->order_status == 'Delivered')current @endif @endif
        "></div><p>Delivered!</p></li>
</ul>