@extends('layouts.app')
@section('subtitle', 'Press and Style Guide')
@section('description', 'Get logos, icons, colors, videos, brand assets, and press information for Discreet Drop.')


@section('header')

@endsection


@section('content')

<div class="jumbotron top">
    <div class="container">
        <h1 class="center">Press and Style Guide</h1>
        <h2 class="center">Logos, Videos, Colors, Info...</h2>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <h2 class="center">Discreet Drop Logo</h2>
        <div class="row">
            <div class="col-sm-6">
                <h3 class="center">SVG</h3>
                <img src="images/DiscreetDropLogo.svg" class="img-responsive center-block svg" alt="Discreet Drop Logo SVG">
            </div>
            <div class="col-sm-6">
                <h3 class="center">PNG</h3>
                <img src="images/DiscreetDropLogo.png" class="img-responsive center-block svg" alt="Discreet Drop Logo PNG">
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="center">Discreet Drop Icon</h2>
        <div class="row">
            <div class="col-xs-3 col-xs-offset-2">
                <h3 class="center">SVG</h3>
                <img src="images/DiscreetDropIcon.svg" class="img-responsive center-block svg" alt="Discreet Drop Icon SVG">
            </div>
            <div class="col-xs-3 col-xs-offset-2">
                <h3 class="center">PNG</h3>
                <img src="images/DiscreetDropIcon.png" class="img-responsive center-block svg" alt="Discreet Drop Icon PNG">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">Colors</h2>
        <div class="row always-equal">
            <div class="col-xs-6 col-sm-4 col-sm-offset-2">
                <h3>Discreet Drop Blue</h3>
                <p>For consistency, the blue color Discreet Drop uses is HEX #3FA9F5.</p>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-blue">
                </div>
            </div>
        </div>
        <div class="row always-equal">
            <div class="col-xs-6 col-sm-4 col-sm-offset-2">
                <h3>Discreet Drop Black</h3>
                <p>For consistency, the black color Discreet Drop uses is HEX #1A1A1A.</p>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-black">
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="center">Discreet Drop 60 Second Explainer Video</h2>
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
            <div class="col-sm-10 col-sm-offset-1">
                <h2>Press Info</h2>
                <p>All the contents on this page are provided free to use as you wish, with high-quality assets and information available to get you started. clean, high resolution logos and icons with transparent backgrounds have been provided on this page in both .SVG and .PNG formats depending on your needs. A linked explainer video has also been provided that may be linked-to and shared to help quickly explain what Discreet Drop does and the benefits and value we offer. For more information or general inquires about Discreet Drop, feel free to contact us by visiting <a href="/contact">our contact page here</a> and sending us an email at any time, and we'll be happy to help answer any questions, or just chat. We're friendly!</p>
            </div>
        </div>
    </div>
    
    <div class="section">
        @include('partials.about_content')
    </div>
    
    
</div>

@endsection


@section('footer')

@endsection