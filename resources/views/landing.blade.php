@extends('layouts.app')
@section('subtitle', 'Guarantee Discreet Shipping on Any Package')
@section('description', 'Discreet Drop hides logos, return labels, invoices, holes, and all other identifying information on any package, from any seller, so all your items have discreet shipping.')

@section('header')
<style>.section{visibility:hidden;}</style>
@endsection

@section('content')

<div class="jumbotron top">
    <div class="hero header-1"></div>
    <div class="container">
        <h1>Guarantee discreet shipping on any package.<br>From any seller.</h1>
        <p>Discreet Drop hides all identifying information, logos, return addresses, and packing slips that reveal the contents of your package, so no one can figure out what's in your private shipments.</p>
        <div class="btn-toolbar">
            <div class="col-sm-3 col-sm-offset-3 col-md-4 col-md-offset-2">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
            <div class="col-sm-3 col-md-4">
                <button class="btn btn-default btn-block btn-lg" onclick="location.href='/how-it-works';">Learn More</button>
            </div>
        </div>
        <br>
        <i class="fa fa-angle-double-down floating" aria-hidden="true"></i>
    </div>
</div>

<div class="container content">
    <div class="section">
        <h2 class="center">Discreet Drop in Just 90 Seconds</h2>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Zp0iOS43DyY?showinfo=0&rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="center">Your Items Arrive as Discreet as Possible</h2>
                <h3 class="center">Just Send Your Packages to Us, and We'll send Them to You 100% Discreet</h3>
                <img src="images/dd-diagram.svg" class="img-responsive center-block svg" alt="discreet Drop Diagram">
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
                        <div class="col-xs-12">
                            <img src="images/box-logo.svg" class="img-responsive center-block svg" alt="Cardboard Box With Logo">
                            <h4>Logos on Packaging</h4>
                            Companies love custom packaging since it looks professional and upscale. However, those logos don't leave much to the imagination and act as an obvious signal to the contents of your package, ruining gift surprises and attracting thieves to high-dollar labels. 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default center">
                    <div class="panel-body">
                        <div class="col-xs-12">
                            <img src="images/box-label.svg" class="img-responsive center-block svg" alt="Cardboard Box With Labels">
                            <h4>Return Labels</h4>
                            Even if a company offers plain-box shipping, the return address on the label still has the company's name and address on it, and with a quick Google search of that name or address, can reveal the sender and the type of contents in your private package to anyone else.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default center">
                    <div class="panel-body">
                        <div class="col-xs-12">
                            <img src="images/box-slips.svg" class="img-responsive center-block svg" alt="Cardboard Box With Packing Slips">
                            <h4>Packing Slips and Customs Labels</h4>
                            Often times the packing slip and customs labels for internationally shipped packages have the exact contents of the box written on them that can pique the curiosity of others.
                        </div>
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
                <img src="images/package-diagram.svg" class="img-responsive center-block svg" alt="Discreet Drop Package Diagram">
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Discreet Drop Benefits and Uses</h2>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <h3 class="center flush">Hide Return Labels to Keep Personal Items a Secret</h3>
                A quick Google search of the name or address on your package's return label will bring up the sender's website, revealing the type of contents you ordered to whoever gets your package before you do. Discreet Drop provides the only way to hide these labels with another box, so once your package arrives to you, the return label can't be linked back to the sender.
            </div>
            <div class="col-sm-6">
                <img src="images/box-label.svg" class="img-responsive center-block svg" alt="Cardboard Box With Label">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h3 class="center flush">Cover Up International Customs Forms and Packing Lists</h3>
                When purchasing items from another country, packages going through customs require an attached form listing the specific contents of the package in order to enter the country, leaving a detailed explanation of what is in the box once it is cleared by customs and delivered to you. Even domestic shipments often include packing lists in an envelope stuck to the outside of the box, which can be looked at by anyone to see what items are in the package.
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/box-slips.svg" class="img-responsive center-block svg" alt="Cardboard Box With Packing Slips">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <h3 class="center flush">Hide Logos Revealing Gifts for Other Members of Your Home</h3>
                Logos and images on the outside of packages can easily spoil a surprise gift for someone's birthday or the holidays if they see the box before you get a chance to hide it. Discreet Drop makes sure all your packages come to your home in a plain box with all the logos hidden, so if someone sees your package, the surprise gift stays a secret.
            </div>
            <div class="col-sm-6">
                <img src="images/box-gift.svg" class="img-responsive center-block svg" alt="Gift Box">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h3 class="center flush">Deter Theives From Seeing Desirable Labels</h3>
                Package theft from apartment common areas and front porches of homes has become an increasing problem, and packages shipped with flashy and desirable labels indicating valuable electronics and goods are an easy target for thieves. Discreet Drop puts your shipments in a plain box with no labels or logos, so your valuable package looks like any other.
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/box-thief.svg" class="img-responsive center-block svg" alt="Box With Logo and Thief">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6">
                <h3 class="center flush">Cover Holes and Damaged Packaging</h3>
                The shipping process is notoriously hard on packages; ripping holes and even tearing tape open before your package gets to your front door. Some sellers even use boxes with cut-out handles and even tapeless folded containers to ship books and other small items that can be opened and closed without any tamper evidence. Discreet Drop puts your package in another box to cover up any possible holes and the double-box prevents any new ones from showing up.
            </div>
            <div class="col-sm-6">
                <img src="images/box-hole.svg" class="img-responsive center-block svg" alt="Cardboard Box with Holes">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h3 class="center">Ship All Your Packages to a P.O. Box From Any Courier</h3>
                Shipping companies like UPS and FedEx can't ship to P.O. Boxes, so most companies simply don't allow you to enter your P.O. Box in as a shipping option. Since Discreet Drop uses USPS, you can send all your packages to us, and we'll forward them to your P.O. Box for maximum privacy. 
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/po-box-diagram.svg" class="img-responsive center-block svg" alt="Discreet Drop Ships To PO Boxes">
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="center">Your Packages Can Look Like This</h2>
                <img src="images/box-all.svg" class="img-responsive center-block svg" alt="Box With Logos Labels Holes and Packing Slips">
            </div>
            <div class="col-sm-6">
                <h2 class="center">Make Sure They Arrive Like This</h2>
                <img src="images/box.svg" class="img-responsive center-block svg" alt="Clean Discreet Plain Box">
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Keep Your Shipments a Secret</h2>
        <div class="btn-toolbar">
            <div class="col-sm-3 col-sm-offset-3 col-md-4 col-md-offset-2">
                <button class="btn btn-primary btn-block btn-lg" onclick="location.href='/register';">Sign Up for Free</button>
            </div>
            <div class="col-sm-3 col-md-4">
                <button class="btn btn-default btn-block btn-lg" onclick="location.href='/how-it-works';">Learn More</button>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">What People are Saying About Discreet Drop</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <blockquote>
                            <p>{{$quote1}}</p>
                            <footer>Anonymous from Twitter</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <blockquote>
                            <p>{{$quote2}}</p>
                            <footer>Anonymous from Twitter</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <blockquote>
                            <p>{{$quote3}}</p>
                            <footer>Anonymous from Twitter</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection

@section('footer')
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="/js/ie.js"></script>
@endsection