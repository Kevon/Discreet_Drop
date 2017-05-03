@extends('layouts.app')
@section('subtitle', 'Discreet Drop Tutorial')
@section('description', 'How to use Discreet Drop.')


@section('header')

@endsection


@section('content')

<div class="container content">
    
    <div class="row">
        <div class="col-sm-12 center"> 
            <h1>Discreet Drop How-To Tutorial</h1>
        </div>
    </div>
    
    <div class="section">
        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h2 class="center flush">Step 1</h2>
                <h3 class="center">Sign Up to Discreet Drop</h3>
                It's easy, it's free, there's not much to say! All you need is an email address and a password and you're all set! If you have any more questions about Discreet Drop or how it works, feel free to check out our <a href="/faq">Frequently Asked Questions</a> for answers, visit our <a href="/trust-and-safety">trust and safety page</a> for details on our security procedures to keep your information safe and private, or feel free to <a href="/contact">contact us</a> with any additional questions.
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/DiscreetDropLogo.svg" class="img-responsive center-block svg" alt="Discreet Drop Logo">
            </div>
        </div>

        <div class="row vertical-align">
            <div class="col-sm-6">
                <h2 class="center flush">Step 2</h2>
                <h3 class="center">Complete Your Shipping Profile</h3>
                Go to your <a href="/dashboard">dashboard page</a> and click on <a href="/profile-info">Update Shipping Profile</a> to complete your shipping profile. In order to streamline the process from when we receive a package for you to shipping it out for final delivery, we require your shipping profile to be completed with your address and payment information saved and ready to use. This allows us to be have all the information we need on hand to quickly and properly process your shipment so you get your package as soon as possible. Your unique Discreet Drop address will not be created unless your shipping profile is filled out.
            </div>
            <div class="col-sm-6">
                <img src="images/box-star.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>

        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h2 class="center flush">Step 3</h2>
                <h3 class="center">Find Your Unique Discreet Drop Address</h3>
                After you've filled out your shipping profile, your <a href="/dashboard">dashboard page</a> will have a panel listing your unique Discret Drop address. It's the address to our facilities containing a unique code that will identify your packages to you so we can keep track of all your orders. Your dashboard will also contain a timeline of all your orders we've processed. You can manually add new orders if that would help you personally keep track of your packages, but this is not required as we will automatically create a new order for every package we receive for you.
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img src="images/profile.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>

        <div class="row vertical-align">
            <div class="col-sm-6">
                <h2 class="center flush">Step 4</h2>
                <h3 class="center">Use Your Discreet Drop Address as Your Shipping Address When Checking Out Online</h3>
                Copy and paste your unique Discreet Drop address as the shipping address when checking out online, instead of using your usual shipping address. Any online retailer will be able to accept this, just be sure to use our name as well as both address lines for the street address so your packages will arrive at our facilities with your tracking code so we will know exactly which packages are yours. 
            </div>
            <div class="col-sm-6">
                <img src="images/checkout.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>

        <div class="row vertical-align">
            <div class="col-sm-6 col-sm-push-6">
                <h2 class="center flush">Step 5</h2>
                <h3 class="center">Monitor and Track Your Package on Your Discreet Drop Dashboard</h3>
                Once your package arrives to our facility, we will simply place it in a larger box with additional packing peanuts for protection, so all the original logos, labels, packing slips, customs forms, and holes will be covered up and completely discreet! You can return to your <a href="/dashboard">dashboard page</a> to see a detailed order tracking system for each package we process for you. Here you'll be able to view how large each incoming package was, who it was from, check which step in the process we're on in processing the package, see the payment details, and get a detailed summary of the outgoing package details including the estimated shipping time and tracking number, so you can track your packages from when they leave our facility on their way to you!
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="inner">
                    @include('partials.progress', ['demo' => 1])
                </div>
            </div>
        </div>

        <div class="row vertical-align">
            <div class="col-sm-6">
                <h2 class="center flush">Step 6</h2>
                <h3 class="center">Receive Your Package 100% Discreet</h3>
                Your packages will arrive to the address you've specified in your <a href="/profile-info">shipping profile</a> in a 100% discreet plain-box, with all logos, return labels, packing slips, customs forms, and holes covered up, so nobody but you will be able to figure out what's in your private packages. 
            </div>
            <div class="col-sm-6">
                <img src="images/box-door.svg" class="img-responsive center-block svg" alt="Responsive image">
            </div>
        </div>
    </div>

</div>

@endsection


@section('footer')

@endsection