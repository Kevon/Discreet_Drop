@component('mail::preheader')
Uh-oh, we've received a package for you, but your payment info needs updating! Please update your card on file in your shipping profile dashboard below, and we'll send out your package to you once we're able to successfully charge the shipping cost.
@endcomponent

@component('mail::message')

# Uh-oh! We've Received a Package For You, but Your Payment Info Needs Updating!
## {{$charge->stripe_failure_message}}

Hello {{$user->first_name}},

We've received a package for you, but the card we have on file couldn't be used as payment for us to ship your package to you 100% discreet.

The error message is "{{$charge->stripe_failure_message}}".

The card we have on file for you ends in {{$user->stripe_last4}} and has an expiration date of {{$user->stripe_exp_month}}/{{$user->stripe_exp_year}}. If that card is out of date, please update your payment information on Discreet Drop, and we'll try to charge your card again tomorrow. Once we have a successful payment, we can send your item to you in a plain-box package. The sooner you update your card on file, the sooner we can ship your package to you as discreet as possible.

Please update your card on file in your shipping profile dashboard below, and we'll send out your package to you once we're able to successfully charge the shipping cost.

@component('mail::button', ['url' => url('/profile_info')])
Go to Your Discreet Drop Dashboard and Update Payment Info
@endcomponent

And as always, you can view all the information about the package we've received for you by [clicking here]({{url('/dashboard')}}).

Thanks,<br>
{{ config('app.name') }}
@endcomponent