@extends('layouts.app')
@section('subtitle', 'Discreet Drop Trust and Safety')
@section('description', "Discreet Drop's Trust and Safety policy to protect your privacy. Learn about how we properly handle your personal data, and ensure secure payment information.")


@section('header')

@endsection


@section('content')

<div class="jumbotron top">
    <div class="hero header-3"></div>
    <div class="container">
        <h1 class="center">Trust and Safety</h1>
        <h2 class="center">Your Packages and Info are in Good, Secure Hands</h2>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="left-center">Secure Payment Processing by Stripe</h2>
                <p>Like many other trusted startups, Discreet Drop relies on <a href="https://stripe.com/" target="_blank">Stripe</a> to handle the storage and processing of all our payments and credit card info. This way, your payment information is always 100% secure and is never stored or even touches our servers.</p>
                <p>We use the latest SSL certifications and HTTPS security layers to further keep your information secure when interacting with Stripe.</p>
                <p>Since we never handle or store your payment information, we are fully PCI compliant so your credit card information will always be safe and secure.</p>
                <p>For more information about Stripe's security policies and procedures, please <a href="https://stripe.com/docs/security/stripe" target="_blank">click here</a>.</p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a href="https://stripe.com/" target="_blank"><img src="images/Stripe_Logo.svg" class="img-responsive center-block svg" alt="Stripe Logo"></a>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="left-center">You're Only Charged When We Ship to You</h2>
                <p>In order to make the Discreet Drop process as easy and streamlined as possible, we require your shipping address and payment info to be completed before your unique Discreet Drop address and code are generated so you can use our service. This guarantees that your items are processed in our facility as fast as possible, so you will get your packages shipped to you completely discreet as fast as possible.</p>
                <p>This also means that you can keep using your Discreet Drop address saved to any seller, and we'll be able to automatically handle any number of packages we receive for you to process at any time, without you needing to intervene. We'll handle everything for you automatically and send you email updates along the way!</p>
                <p>If you decide to only use our service once, or not at all after completing your shipping profile, don't worry! Discreet Drop will only charge your account for packages we process to ship out to you. If we never receive a package to process for you, you'll never be charged anything. Simple. When we do receive a package for you, we charge you the lowest cost possible using our USPS Commercial Plus Pricing account to save you as much money as possible.</p>
                <p>For more information about our pricing structure and to get shipping estimates, feel free to use our convenient <a href="/pricing-calculator">Pricing Calculator</a> to estimate how much our shipping costs to you will be and to see a detailed explanation on our low pricing.</p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <img src="images/box-star.svg" class="img-responsive center-block svg" alt="Cardboard Box Star">
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="left-center">Package Protection is our Priority</h2>
                <p>Here at Discreet Drop, we take package security very seriously. When your packages arrive to our facility, we keep them secure and track them at every stage for protection until we hand them off directly to the USPS for delivery. Your packages won't get lost or stolen under our watch. We will also update you on every stage in the process, so you can check your Discreet Drop dashboard for updates and tracking numbers for all your packages we receive, and will email you all important updates so you don't need to keep a close eye on the status of your package if you don't want to.</p>
                <p>Likewise, the contents of your packages must also be safe for us to handle and ship. By using Discreet Drop, you must be assured that all items you send through us are legal to ship via the USPS and must not contain any weapons or ammunition, drugs or drug paraphernalia, alcohol or tobacco, flammable materials, live animals, or illegal pornographic material in any capacity. If we discover any attempt to use our service to ship these and other illegal items, discreet Drop will cooperate with all law enforcement agencies on the package details. So please, for everyone's safety, don't use our service in an inappropriate matter. Items shipped to us need to be legal to ship to you, even if we don't open your packages and directly handle the contents.</p>
                <p>For more information about what is legal to ship via the USPS, please check out their <a href="https://www.usps.com/ship/shipping-restrictions.htm" target="_blank">domestic shipping restrictions</a> page.</p>
                <P>Please check out our <a href="/terms-of-service">Terms of Service</a> for more info.</P>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <img src="images/box-lock.svg" class="img-responsive center-block svg" alt="Cardboard Box Lock">
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="left-center">Your Personal Info is Always Safe</h2>
                <p>At Discreet Drop, all your personal information is protected and encrypted so your personal information and account info never falls into the wrong hands. Likewise, your credit card and payment information is securely handled via <a href="https://stripe.com/" target="_blank">Stripe</a> and never touches or is stored on our servers, so we are fully PCI compliant. Your information will never be sold or transferred to a third-party. Privacy is kind of our thing around here...</p>
                <P>Please check out our <a href="/privacy-policy">Privacy Policy</a> for more info.</P>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('footer')

@endsection