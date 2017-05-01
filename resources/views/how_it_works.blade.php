@extends('layouts.app')
@section('subtitle', 'How it Works')
@section('description', "Learn more about how Discreet Drop works, and how easy we make it to hide logos and labels on all your orders, so you'll always receive a plain-box package.")


@section('header')
<style>.section{visibility: hidden;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@endsection


@section('content')

<div class="jumbotron top">
    <div class="hero header-2"></div>
    <div class="container">
        <h1>100% Discreet Shipping as Easy as Possible</h1>
        <p>With our streamlined dashboard and automatic shipment processing system, we give you a unique address to ship your packages to, and Discreet Drop will take care of the rest.</p>
        <div class="btn-toolbar">
            <div class="col-sm-6 col-sm-offset-3">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
        </div>
        <i class="fa fa-angle-double-down floating" aria-hidden="true"></i>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="center">We Turn This</h2>
                <img src="images/box-all.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Into This</h2>
                <img src="images/box.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">The Discreet Drop Process</h2>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Privacy has become a pseudo-luxury in today's digital age, with any information being available just a simple search way. We've identifed this gap in privacy protection with all the information and identifiable logos a shipped box provides to anyone who may see it. Even merchants who advertise discreet plain-box shipping, still provide a return label with a name and address where one quick Google search would reveal what's in any package. We've realized that if you're not handling your package at all times, your privacy is vulnerable on any shipment. With this in mind, we created Discreet Drop as a solution to cover up those privacy issues, literally. We serve as a shipment processor, where people can ship their packages to us via a unique address, we double-box the package to cover up any external logos, return labels, packing slips, holes; anything that can act as identifying information and can be used to signal what's in the box. Then we ship the plain box out to the customer so it will arrive completely discreet, and nobody but the customer would be able to figure out what's in the package. Easy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">We Put Your Identifiable Box in a Plain Box</h2>
        <h3 class="center">Boxception</h3>
    </div>

    <div class="section">
        <h2 class="center">Plain-Box Packages in 4 Easy Steps</h2>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <img src="images/profile.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Step 1</h2>
                <h3 class="center">Generate Your Unique Discreet Drop Address</h3>
                Once you create a shipping profile with your address (so we quickly know where to ship your packages to once they arrive) and credit card info (we use <a href="https://stripe.com/" target="_blank">Stripe</a> to keep your information secure, and only charge once we have a package to send out to you), you'll see a unique Discreeet Drop address for you to send your shipments to.
            </div>
               
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <img src="images/checkout.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <h2 class="center">Step 2</h2>
                <h3 class="center">Use That Address as Your Shipping Address When Buying Online</h3>
                When checking out anywhere online, use the unique discreet Drop address from Step 1 as your shipping address instead of your usual home address so your items will be sent to our package processing center with the qunique code in the address to let us know that your packages belong to you.
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <img src="images/dd-diagram.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Step 3</h2>
                <h3 class="center">We'll Receive Your Package and Hide All Logos and Return Labels</h3>
                This is where we take care of everything for you! Since you completed a shipping profile, we'll enter your package into our system and then double-box it to cover up any logos, return label addresses or names, packing slips, or even holes in the original box. Then we'll determine the lowest-cost shipping rate via USPS using our Commercial Plus Pricing account, charge your payment information stored on <a href="https://stripe.com/" target="_blank">Stripe</a>, and ship it out to the address we have for you on file, all without you having to do a thing. Like we said, we take care of everything!
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <img src="images/box-door.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <h2 class="center">Step 4</h2>
                <h3 class="center">We Ship Your Now Plain-Box Package Automaticaly to You</h3>
                That's it! You can sit back, relax, and have the confidence knowing that your package will arrive to your home in a 100% discreet plain box, with no logos or return labels to reveal what's inside. 
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">We Take Care of Everything For You</h2>
    </div>
    
    <div class="section">
        <h2 class="center">Discreet Drop hides all logos and return addresses</h2>
        <h3 class="center">Only you would know what's in your private shipments</h3>
        <div class="row">
            <div class="col-sm-12">
                <img src="images/package-diagram.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="col-sm-12 center">Still Not convinced? Here's a 60 Second Explainer Video!</h2>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gDi286SFsBE"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Keep Your Shipments a Secret</h2>
        <div class="btn-toolbar">
            <div class="col-sm-6 col-sm-offset-3">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
        </div>
    </div>
</div>


@endsection


@section('footer')
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
@endsection