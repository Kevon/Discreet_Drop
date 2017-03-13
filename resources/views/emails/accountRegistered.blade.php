@component('mail::message')

![Discreet Drop Logo]({{asset('/images/DiscreetDropLogo.png')}} "Discreet Drop Logo")

# Welcome to Discreet Drop!

Your account has been registered, but before you can see your unique Discreet Drop address to send your packages to us to repackage and ship to you 100% discreet, you'll need to add your shipping address and billing information to your account. This way, whenever we get a package for you, we can immediately process your shipment and get your plain-box package to you as fast as possible.

You can manage your account and view all your orders you've created (or we've received and automaticlly creted for you) from your Discreet Drop dashboard by clicking the button below.

@component('mail::button', ['url' => 'discreetdrop.com/dashboard'])
Go to Your Discreet Drop Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent