@extends('layouts.app')
@section('subtitle', 'Pricing Calculator')
@section('description', 'Estimate the shipping cost from us to you!')


@section('header')

@endsection


@section('content')

<div class="container content">
    <h1 class="center">Estimate Shipping Cost from Us to You</h1>
    <br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <form role="form" method="POST" action="{{ url('/pricing-calculator/submit') }}">
                            {{ csrf_field() }}
                            <p>Since you won't know the actual size or weight of your package before it arrives, you can select the closest range for the item you want to be shipped discreetly to you, and we can calculate you the best approximation to give you an idea on how much it'll cost.</p>

                            <div class="row">
                                <div class="form-group">
                                    <label for="size">Approximate Size of Package</label>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="size" id="size-small" value="12" autocomplete="off" checked>Small (12")
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="size" id="size-medium" value="18" autocomplete="off">Medium (18")
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="size" id="size-large" value="24" autocomplete="off">Large (24")
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="size" id="size-xlarge" value="32" autocomplete="off">Extra-Large (32")
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="size">Approximate Weight of Package</label>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="weight" id="weight-light" value="50" autocomplete="off" checked>Light (&#60;5lbs.)
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="weight" id="weight-medium" value="160" autocomplete="off">Medium (5-15lbs.)
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="weight" id="weight-heavy" value="300" autocomplete="off">Heavy (&#62;15lbs.)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 center form-group">
                                    <label for="zip_code">Your Zip Code</label>
                                    <input id="zip_code" type="tel" class="form-control input-lg" autocomplete="postal-code" name="zip_code" maxlength="10" required>

                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="row btn-toolbar">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <button type="submit" class="btn btn-block btn-primary" id="submit" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Calculating Latest Shipping Rates">Estimate Shipping Rate</button>
                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>
                <div id="rate"></div>
            </div>
        </div>
</div>
@endsection


@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js" integrity="sha256-j9bZfF4eKVp8Zrzq/zna8WWo5lroqN1yKEQ8qvBfK1A=" crossorigin="anonymous"></script>
<script src="/js/pricing.js"></script>
@endsection