@extends('layouts.app')
@section('subtitle', 'Frequently Asked Questions')
@section('description', 'Frequently Asked Questions about Discreet Drop and how it works.')


@section('header')

@endsection


@section('content')

<div class="container content">
    <h1 class="center">Frequently Asked Questions</h1>
    <br>
    <div class="panel-group col-sm-8 col-sm-offset-2" id="accordion">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="accordion-toggle collapsed" data-parent="#accordion" href="#collapse1">
                        Test
                    </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="accordion-toggle collapsed" data-parent="#accordion" href="#collapse2">
                        Test
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="accordion-toggle collapsed" data-parent="#accordion" href="#collapse3">
                        Test
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
    </div>
</div>

@endsection


@section('footer')

@endsection