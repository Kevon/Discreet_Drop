@extends('layouts.app')
@section('subtitle', 'About Us')
@section('description', 'About Discreet Drop and Kevin Skompinski.')


@section('header')

@endsection


@section('content')

<div class="jumbotron top">
    <div class="hero header-3"></div>
    <div class="container">
        <h1 class="center">About Discreet Drop</h1>
        <h2 class="center">The only way to guarantee discreet shipping on any package you order</h2>
    </div>
</div>

<div class="container content">
    
    <div class="section">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <img src="images/DiscreetDropLogo.svg" class="img-responsive center-block svg" alt="Discreet Drop Logo">
            </div>
        </div>
    </div>
    
    @include('partials.about_content')
</div>

@endsection


@section('footer')

@endsection