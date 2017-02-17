@extends('layouts.app')
@section('subtitle', 'How it Works')
@section('description', "Learn more about how Discreet Drop works, and how easy we make it to hide logos and labels on all your orders, so you'll always receive a plain-box package.")


@section('header')
<style>.section{visibility: hidden;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@endsection


@section('content')

<div class="jumbotron top">
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
                <h2 class="center">your Packages Can Look Like This</h2>
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Make Sure They Arrive Like This</h2>
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">About Discreet Drop</h2>
        <div class="row">
            <div class="col-sm-12">
                <p>Privacy has become a pseudo-luxury in today's digital age, with any information being available just a simple search way. We've identifed this gap in privacy protection with all the information and identifiable logos a shipped box provides to anyone who may see it. Even merchants who advertise discreet plain-box shipping, still provide a return label with a name and address where one quick Google search would reveal what's in any package. We've realized that if you're not handling your package at all times, your privacy is vulnerable on any shipment. With this in mind, we created Discreet Drop as a solution to cover up those privacy issues, literally. We serve as a shipment processor, where people can ship their packages to us via a unique address, we double-box the package to cover up any external logos, return labels, packing slips, holes; anything that can act as identifying information and can be used to signal what's in the box. Then we ship the plain box out to the customer so it will arrive completely discreet, and nobody but the customer would be able to figure out what's in the package. Easy.</p>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Discreet Drop Benefits and Uses</h2>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h3 class="center">Hide Return Labels to Keep Personal Items a Secret</h3>
                A quick google search of the name or address on your package's return label will bring up the sender's website, revealing the type of contents you ordered to whoever gets your package before you do. Discreet Drop provides the only way to hide these labels with another box, so once your package arrives to you, the return label can't be linked back to the sender.
            </div>
               
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <h3 class="center">Hide Logos Revealing Gifts for Other Members of Your Home</h3>
                Logos and images on the outside of packages can easily spoil a suprise gift for someone's birthday or the holidays if they see the box before you get a chance to hide it. Discreet Drop makes sure all your packages come to your home in a plain box with all the logos hidden, so if someone sees your package, the suprise gift stays a secret.
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h3 class="center">Cover Holes and Damaged Packaging</h3>
                The shipping process is notoriously hard on packages; ripping holes and even tearing tape open before your package gets to your front door. Some sellers even use boxes with cut-out handels and even tapeless folded containers to ship books and other small items that can be opened and closed without any tamper evidence. Discreet Drop puts your package in another box to cover up any possible holes and the double-box prevents any new ones from showing up.
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <h3 class="center">Deter Theives From Seeing Desirable Labels</h3>
                Package thft from apparmtent common areas and front porches of homes has become an increasing problem, and packages shipped with flashy and desierasble labels indicating valuable electronics and goods are an easy target for thieves. Discreet Drop puts your shipments in a plain box with no labels or logos, so your valuable package looks like any other.
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h3 class="center">Send All Your Packages to a P.O. Box From Any Courier</h3>
                Shipping companies like UPS and FedEx can't ship to P.O. Boxes, so most companies simply don't allow you to enter your P.O. Box in as a shipping option. Since Discreet Drop uses USPS, you can send all your packages to us, and we'll forward them to your P.O. Box for maximum privacy. 
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">Discreet Drop hides all logos and return addresses</h2>
        <h4 class="center">Only you would know what's in your private shipments</h4>
        <div class="row">
            <div class="col-sm-12">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
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
        <div class="row">
            <h2 class="col-sm-12 center">Keep Your Shipments a Secret</h2>
            <div class="btn-toolbar">
                <div class="col-sm-6 col-sm-offset-3">
                    <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('footer')
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
@endsection