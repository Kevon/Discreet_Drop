@component('mail::message')

![Discreet Drop Logo]({{asset('/images/DiscreetDropLogo.svg')}} "Discreet Drop Logo")

# You're Ready to Ship Your Packages 100% Discreet

Awesome! You have been given a unique Discreet Drop address, and are now ready to start shipping your online orders to us, so you can receive your packages in a plain box with no logos or return labels, and as discreet as possible. 

You can now now view your unique Discreet Drop address and start using Discreet Drop from your dashboard below.

@component('mail::button', ['url' => 'url' => 'discreetdrop.com/dashboard'])
View Your Unique Discreet Drop Address and Start Using Discreet Drop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent