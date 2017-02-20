@extends('layouts.app')
@section('subtitle', 'Guarantee Discreet Shipping on Any Package')
@section('description', 'Hide logos, return labels, invoices, holes, and all other identifying information on any package from any seller so your item arrives as discreet as possible.')

@section('header')
<style>.section{visibility: hidden;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@endsection

@section('content')

<div class="jumbotron top">
    <div class="container">
        <h1>Guarantee discreet shipping on any package.<br>From any seller.</h1>
        <p>Discreet Drop hides all identifying information, logos, return addresses, and packing slips that reveal the contents of your package, so no one can figure out what's in your private shipments.</p>
        <div class="btn-toolbar">
            <div class="col-sm-3 col-sm-offset-3">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-default btn-block btn-lg" onclick="location.href='/how-it-works';">Learn More</button>
            </div>
        </div>
        <i class="fa fa-angle-double-down floating" aria-hidden="true"></i>
    </div>
</div>

<div class="container content">
    <div class="section">
        <h2 class="col-sm-12 center">Discreet Drop in Just 60 Seconds</h2>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gDi286SFsBE"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Anyone Can Figure Out What's in Your Package</h2>
        <h3 class="center">Why You Need Plain-Box Discreet Shipping</h3>
        <div class="row equal-height">
            <div class="col-sm-4">
                <div class="panel panel-default center">
                    <div class="panel-body">
                        <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
                        <h4>Logos on Packaging</h4>
                        Companies love custom packaging since it looks professional and upscale. However, those logos don't leave much to the imagination and act as an obvious signal to the contents of your package, ruining gift suprises and attracting thieves to high-dollar labels. 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default center">
                    <div class="panel-body">
                        <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
                        <h4>Return Labels</h4>
                        Even if a company offers plain-box shipping, the return addrsss on the label still has the company's name and address on it, and with a quick Google search of that name or address, can reveal the sender and the type of contents in your private package to anyone else.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default center">
                    <div class="panel-body">
                        <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
                        <h4>Packing Slips</h4>
                        Often times the packing slip and international customs labels have the exact contents of the box written on them that can pique the curiosity of someone else.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Discreet Drop hides all logos and return addresses</h2>
        <h3 class="center">Only you would know what's in your private shipments</h3>
        <div class="row">
            <div class="col-sm-12">
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
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
        <h2 class="center">We Put Your Box in a Bigger Box</h2>
        <h3 class="center">Boxception</h3>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="center">Your Packages Can Look Like This</h2>
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Make Sure They Arrive Like This</h2>
                <img src="http://placeholder.pics/svg/600x400" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <h2 class="col-sm-12 center">Keep Your Shipments a Secret</h2>
            <div class="btn-toolbar">
            <div class="col-sm-3 col-sm-offset-3">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-default btn-block btn-lg" onclick="location.href='/how-it-works';">Learn More</button>
            </div>
        </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">What People are Saying About Discreet Drop</h2>
        <div class="row">
            <div class="col-sm-4 center">
                <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Me and <a href="https://twitter.com/ro_raffe">@ro_raffe</a> don&#39;t see eye-to-eye often...<br><br>Mostly because he&#39;s like a foot shorter than me.<br><br>It&#39;s fucking hilarious.</p>&mdash; Kevon (@fuckKevon) <a href="https://twitter.com/fuckKevon/status/825533840802377728">January 29, 2017</a></blockquote>
            </div>
            <div class="col-sm-4 center">
                <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">I hate being an adult because now I have to bring my own crayons to restaurants...</p>&mdash; Kevon (@fuckKevon) <a href="https://twitter.com/fuckKevon/status/825009202632523776">January 27, 2017</a></blockquote>
            </div>
            <div class="col-sm-4 center">
                <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">&quot;IM SICK OF PRETENDING TO BE SONEONE I&#39;M NOT&quot; said the teenager who clearly didn&#39;t understand the point of the Witness Protection Program...</p>&mdash; Kevon (@fuckKevon) <a href="https://twitter.com/fuckKevon/status/822475173135785984">January 20, 2017</a></blockquote>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('footer')
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection