@component('mail::message')

# We've Received a Package For You
## And We've Just Shipped It To You 100% Discreet

Like we've just said, we've received a package from {{$order->Incoming_Package->sender}} for you with the tracking number {{$order->Incoming_Package->tracking_number}}.

We've successfully charged your {{$order->Shipment->Charge->stripe_source_last4}} card the shipping fee of ${{number_format(($order->Shipment->Charge->stripe_amount /100), 2, '.', ' ')}}, and sent your plain-box 100% discreet package to {{$order->Shipment->Outgoing_Package->to_street1}} via {{$order->Shipment->Outgoing_Package->carrier}}. It should arrive to you in {{$order->Shipment->Outgoing_Package->days}} days.

The tracking number for your discreet package is [{{$order->Shipment->Outgoing_Package->tracking_number}}]({{$order->Shipment->Outgoing_Package->tracking_url}}).

You can track your package online [by clicking here]({{$order->Shipment->Outgoing_Package->tracking_url}}).

You can see all the information about the package we've received, the shipment we've sent to you, and all payment information for all your orders by visiting your Discreet Dashboard below.

@component('mail::button', ['url' => '{{url('/dashboard')}}'])
View and Track Packages
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent