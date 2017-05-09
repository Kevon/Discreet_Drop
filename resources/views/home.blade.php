@extends('layouts.app')

@section('content')
<div class="container content">
    
    <div class="row">
        <div class="col-sm-12 center"> 
            <h1>Hello!</h1>
            <p>You are already logged in!</p> 
            <p>Please <a href="/dashboard">click here</a> to go to your Discreet Drop dashboard.</p>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a href="/dashboard"><img src="images/box-star.svg" class="img-responsive center-block svg" alt="Cardboard Box Star"></a>
            </div>
        </div>
    </div>
    
</div>
@endsection
