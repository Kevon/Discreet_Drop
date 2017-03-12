@component('mail::message')

![Discreet Drop Logo]({{asset('/images/DiscreetDropLogo.svg')}} "Discreet Drop Logo")

# We've Received a Package For You, and We've Shipped it to You 100% Discreet

Your order has been shipped!

@component('mail::button', ['url' => 'discreetdrop.com/dashboard'])
View and Track Package
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent