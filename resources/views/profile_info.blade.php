@extends('layouts.app')

@section('content')
<div class="container content">
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="center"><strong>Your shipping profile must be filled out before your Discreet Drop address is created and you can start shipping to us.</strong></p>
                            @if (Request::path() == "/profile_info")
                                <p class="center"><strong><a href="/profile_info">Please click here to complete your shipping profile and start shipping any package you want to arrive 100% discreet.</a></strong></p>
                            @endif
                            <p class="center">Once your profile is complete, you can create orders and start shipping any package you want to arrive to you as discreet as possible, and we'll automatically re-package your item to hide all identifying information and logos, charge your card secuerly stored on <a href="https://stripe.com/" target="_blank">Stripe</a> (and never on our servers) the lowest shipping rate, and we'll be able to send your package out to you vis USPS as fast as possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
    
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading center">Update Shipping Profile</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                
                                <h4>Your Shipping Address</h4>
                                
                                <div class="row">
                                    <div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">First Name</label>
                                        <input id="password" type="password" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Last Name</label>
                                        <input id="password" type="password" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Address Line 1</label>
                                    <input id="password" type="password" class="form-control input-lg" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Address Line 2</label>
                                    <input id="password" type="password" class="form-control input-lg" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">City</label>
                                        <input id="password" type="password" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">State</label>
                                        <input id="password" type="password" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Zip Code</label>
                                        <input id="password" type="number" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Phone Number</label>
                                    <input id="password" type="tel" class="form-control input-lg" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                
                                <hr>
                                
                                <div class=new_credit_card> 
                                    <h4>Credit Card Information</h4>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Name on Card</label>
                                        <input id="password" type="text" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Card Number</label>
                                        <input id="password" type="number" class="form-control input-lg" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">CVC</label>
                                            <input id="password" type="number" class="form-control input-lg" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Exp Month</label>
                                            <input id="password" type="number" class="form-control input-lg" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Exp Year</label>
                                            <input id="password" type="number" class="form-control input-lg" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Billing Zip Code</label>
                                            <input id="password" type="number" class="form-control input-lg" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    <div class=current_credit_card> 
                                        <h4>Card on File</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <h5>Brand:</h5>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5>Last 4: 4242</h5>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5>Expires: **/**</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 col-xs-offset-3">
                                                <button class="btn btn-default btn-block" type="button" onclick="updateCard()">Update Card</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row btn-toolbar">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-block btn-primary">Save Changes</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
