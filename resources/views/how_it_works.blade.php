@extends('layouts.app')
@section('subtitle', 'How Discreet Drop Works to Guarantee 100% Discreet Shipping')
@section('description', "Learn more about how Discreet Drop works, and how easy we make it to hide logos and labels on all your orders, so you'll always receive a plain-box package.")

@section('header')
<style>.section{visibility:hidden;}</style>
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
        <br>
        <i class="fa fa-angle-double-down floating" aria-hidden="true"></i>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="center">We Turn This</h2>
                <img src="images/box-all.svg" class="img-responsive center-block svg" alt="Box With Logos Labels Holes and Packing Slips">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Into This</h2>
                <img src="images/box.svg" class="img-responsive center-block svg" alt="Clean Discreet Plain Box">
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
                                <p>Discreet Drop is the only way to guarantee 100% discreet shipping on any package, from any seller. Discreet Drop offers a way to cover up any and all logos, return labels, packing slips, customs forms, and holes in the packaging so nobody but you will be able to figure out what's in your private packages. Even websites that advertise discreet shipping will still have a return label with a company name and return address, a packing slip, or a customs form; all of which can be easily Googled that'll indicate what kind of item is in your package.</p>
                                <br>
                                <p>With this in mind, we've created Discreet Drop as the only solution to cover up those privacy issues, literally. Discreet Drop offers an easy process to double-box your packages to cover up any obvious logos or branding, return labels, packing slips, holes; anything that can act as identifying information and can be used to signal what's in the box is hidden. We serve as a shipment processor, where you can ship your packages to us via a unique address, from any online store. We then double-box the package to cover up any external logos, return labels, packing slips, and even holes; anything that can act as identifying information and can be used to signal what's in the box. Easy.</p>
                                <br>
                                <p>With Discreet Drop, packages will arrive in a 100% discreet plain-box; with no logos or branding to attract attention from anyone, no labels to reveal the contents of the box, and won't have any identifying information that can be used to figure out is in a package. Only you will ever know what is in your packages.</p>
                                <br>
                                <p>Privacy is important, and with Discreet Drop, your personal packages remain private, so only you will know what's in your packages. As discreet as possible, as easy as possible. See our <a href="/faq">frequently asked questions</a> or our <a href="/trust-and-safety">trust and safety guidelines</a> for more information on the Discreet Drop process.</p>
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
            <div class="col-sm-6 col-sm-push-6">
                <h2 class="center flush">Step 1</h2>
                <h3 class="center">Generate Your Unique Discreet Drop Address</h3>
                Once you create a shipping profile with your address (so we quickly know where to ship your packages to once they arrive) and credit card info (we use <a href="https://stripe.com/" target="_blank">Stripe</a> to keep your information secure, and only charge once we have a package to send out to you), you'll see a unique Discreet Drop address for you to send your shipments to.
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/profile.svg" class="img-responsive center-block svg" alt="Find Your Unique Discreet Drop Address">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <h2 class="center flush">Step 2</h2>
                <h3 class="center">Use That Address as Your Shipping Address When Buying Online</h3>
                When checking out anywhere online, use the unique Discreet Drop address from Step 1 as your shipping address instead of your usual home address so your items will be sent to our package processing center with the unique code in the address to let us know that your packages belong to you.
            </div>
            <div class="col-sm-6">
                <img src="images/checkout.svg" class="img-responsive center-block svg" alt="Use Discreet Drop Address When Checkout Online">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h2 class="center flush">Step 3</h2>
                <h3 class="center">We'll Receive Your Package and Hide All Logos and Return Labels</h3>
                This is where we take care of everything for you! Since you completed a shipping profile, we'll enter your package into our system and then double-box it to cover up any logos, return label addresses or names, packing slips, or even holes in the original box. Then we'll determine the lowest-cost shipping rate via USPS using our Commercial Plus Pricing account, charge your payment information stored on <a href="https://stripe.com/" target="_blank">Stripe</a>, and ship it out to the address we have for you on file, all without you having to do a thing. Like we said, we take care of everything!
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/dd-diagram.svg" class="img-responsive center-block svg" alt="Discreet Drop Diagram">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <h2 class="center flush">Step 4</h2>
                <h3 class="center">We Ship Your Now Plain-Box Package Automaticaly to You</h3>
                That's it! You can sit back, relax, and have the confidence knowing that your package will arrive to your home in a 100% discreet plain box, with no logos or return labels to reveal what's inside. See our <a href="/faq">frequently asked questions</a> or our <a href="/trust-and-safety">trust and safety guidelines</a> for more information on the Discreet Drop process.
            </div>
            <div class="col-sm-6">
                <img src="images/box-door.svg" class="img-responsive center-block svg" alt="Discreet Box at Door">
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
                <img src="images/package-diagram.svg" class="img-responsive center-block svg" alt="Discreet Drop Package Diagram">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">Still Not convinced? Here's a 90 Second Explainer Video!</h2>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Zp0iOS43DyY?showinfo=0&rel=0" allowfullscreen></iframe>
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
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
@endsection