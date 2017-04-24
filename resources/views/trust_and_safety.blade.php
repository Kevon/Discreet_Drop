@extends('layouts.app')
@section('subtitle', 'Discreet Drop Trust and Safety')
@section('description', "Discreet Drop's Trust and Safety policy to protect your privacy. Learn about how we properly handle your personal data, and ensure secure payment information.")


@section('header')

@endsection


@section('content')

<div class="jumbotron top">
    <div class="container">
        <h1 class="center">Trust and Safety</h1>
        <h2 class="center">Your Packages and Info are in Good, Secure Hands</h2>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>Secure Payment Processing by Stripe</h2>
                <p>Like many other trusted startups, Discreet Drop relies on <a href="https://stripe.com/" target="_blank">Stripe</a> to handle the storage and processing of all our payments and credit card info. This way, your payment information is always 100% secure and is never stored or even touches our servers.</p>
                <p>We use the latest SSL certifications and HTTPS security layers to further keep your information secure when interacting with Stripe.</p>
                <p>Since we never handle or store your payment information, we are fully PCI compliant so your credit card information will always be safe and secure.</p>
                <p>For more information about Stripe's security policies and procedures, please <a href="https://stripe.com/docs/security/stripe" target="_blank">click here</a>.</p>
            </div>
            <div class="center">
                <a href="https://stripe.com/" target="_blank">
                    <img src="/images/powered_by_stripe.png" alt="Powered by Stripe">
                </a>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>You're Only Charged When We Ship to You</h2>
                <p>With this in mind, we created Discreet Drop as a solution to cover up those privacy issues, literally. We serve as a shipment processor, where people can ship their packages to us via a unique address, we double-box the package to cover up any external logos, return labels, packing slips, holes; anything that can act as identifying information and can be used to signal what's in the box. Then we ship the plain box out to the customer so it will arrive completely discreet, and nobody but the customer would be able to figure out what's in the package. Easy. </p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>Package Protection is our Priority</h2>
                <p>With this in mind, we created Discreet Drop as a solution to cover up those privacy issues, literally. We serve as a shipment processor, where people can ship their packages to us via a unique address, we double-box the package to cover up any external logos, return labels, packing slips, holes; anything that can act as identifying information and can be used to signal what's in the box. Then we ship the plain box out to the customer so it will arrive completely discreet, and nobody but the customer would be able to figure out what's in the package. Easy. </p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>Your Personal Info is Always Safe</h2>
                <p>At discreet Drop, all your personal information is protected and encrypted so your personal information and account info never falls into the wrong hands. Likewise, your credit card and payment information is securely handled via <a href="https://stripe.com/" target="_blank">Stripe</a> and never touches or is stored on our servers, so we are fully PCI compliant.</p>
                <P>Please check out our <a href="/privacy-policy">Privacy Policy</a> for more info.</P>
            </div>
        </div>
    </div>
    
    
    
</div>

@endsection


@section('footer')

@endsection