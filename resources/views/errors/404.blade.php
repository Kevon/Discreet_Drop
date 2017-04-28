@extends('layouts.app')

@section('content')
<div class="container content">
    
    <div class="row">
        <div class="col-sm-12 center"> 
            <h1>Uh-oh! 404 Error...</h1>
            <p>The page you were looking for was not found. It may have been moved, deleted, renamed, or was simply a typo.</p> 
            <p>Please <a href="/">click here</a> to return home and try again.</p>
        </div>
    </div>
    
    <div class="section">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a href="/"><img src="images/box-404.svg" class="img-responsive center-block svg" alt="404 Box"></a>
            </div>
        </div>
    </div>
    
</div>
@endsection
