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
    @include('partials.about_content')
</div>

@endsection


@section('footer')

@endsection