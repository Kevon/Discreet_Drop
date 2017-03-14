@component('mail::message')

# You're all set {{$user->first_name}}!
## Now You're Ready to Ship Your Packages 100% Discreet...

Awesome! Your shipping profile has been successfuly created! 

You have been given a unique Discreet Drop address, and are now ready to start shipping your online orders to us, so you can receive your packages in a plain box with no logos or return labels, and as discreet as possible. 

You can now now view your unique Discreet Drop address and start using Discreet Drop from your dashboard below.

@component('mail::button', ['url' => '{{url('/dashboard')}}'])
View Your Unique Discreet Drop Address and Start Using Discreet Drop
@endcomponent

To find out how to use Discreet Drop and what to do with your unique Discreet Drop address, you can [click here to for a tutorial]({{url('/tutorial')}}) (don't worry, we make it as easy as possible to use).

Thanks,<br>
{{ config('app.name') }}
@endcomponent