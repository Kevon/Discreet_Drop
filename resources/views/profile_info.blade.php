@extends('layouts.app')
@section('subtitle', 'Update Shipping Profile')
@section('description', 'Hide logos, return labels, invoices, holes, and all other identifying information on any package from any seller so your item arrives as discreet as possible.')


@section('header')

@endsection


@section('content')
<div class="container content">
    
    <h1 class="center">Update Shipping Profile</h1>
    <br>
    
    @if(empty($user->substantiated_at))
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @include('partials.profile_alert')
            </div>
        </div>
    @endif 
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <form role="form" method="POST" action="{{ url('/profile-info/update') }}" autocomplete="on" id="profile-form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <h4 class="center">Your Shipping Address</h4>

                        <div class="row">
                            <div class="col-sm-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name">First Name</label>
                                <input id="first_name" type="text" class="form-control input-lg" autocomplete="given-name" name="first_name" value="{{ old('first_name', isset($user->first_name) ? $user->first_name : '') }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" type="text" class="form-control input-lg" autocomplete="family-name" name="last_name" value="{{ old('last_name', isset($user->last_name) ? $user->last_name : '') }}"required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                                <label for="address_1">Address Line 1</label>
                                <input id="address_1" type="text" class="form-control input-lg" autocomplete="address-line1" name="address_1" value="{{ old('address_1', isset($user->address_1) ? $user->address_1 : '') }}" required>

                                @if ($errors->has('address_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                                <label for="address_2">Address Line 2 - Optional</label>
                                <input id="address_2" type="text" class="form-control input-lg" autocomplete="address-line2" name="address_2" value="{{ old('address_2', isset($user->address_2) ? $user->address_2 : '') }}">

                                @if ($errors->has('address_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control input-lg" autocomplete="address-level2" name="city" value="{{ old('city', isset($user->city) ? $user->city : '') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-3 form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label for="state">State</label>
                                <select id="state" class="form-control input-lg" autocomplete="address-level1" name="state" required>
                                        @include('partials.state_list')
                                </select>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-4 form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                                <label for="zip_code">Zip Code</label>
                                <input id="zip_code" type="tel" class="form-control input-lg" autocomplete="postal-code" name="zip_code" maxlength="10" value="{{ old('zip_code', isset($user->zip_code) ? $user->zip_code : '') }}" required>

                                @if ($errors->has('zip_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone">Phone Number - Optional</label>
                                <input id="phone" type="tel" class="form-control input-lg" autocomplete="zip" name="phone" value="{{ old('phone', isset($user->phone) ? $user->phone : '') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <hr>
                            </div>
                        </div>

                        <div class="new-card @if(!empty($user->substantiated_at)) hidden @endif")> 
                            <h4 class="cc-label center">Credit Card Information</h4>

                            <div class="row">
                                <div class="col-sm-12 form-group{{ $errors->has('name_on_card') ? ' has-error' : '' }}">
                                    <label for="name_on_card">Name on Card</label>
                                    <input id="name_on_card" type="text" autocomplete="name" class="form-control input-lg" data-stripe="name">

                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 form-group{{ $errors->has('cc_number') ? ' has-error' : '' }}">
                                    <label for="cc_number">Card Number</label>
                                    <input id="cc_number" type="tel" autocomplete="cc-number" class="form-control input-lg cc-number" data-stripe="number" maxlength="19">

                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 form-group{{ $errors->has('cc_exp') ? ' has-error' : '' }}">
                                    <label for="cc_exp">Exp</label>
                                    <input id="cc_exp" type="tel" autocomplete="cc-exp" class="form-control input-lg cc-exp" placeholder="MM/YY" data-stripe="exp" maxlength="7">

                                    <span class="help-block"></span>

                                </div>

                                <div class="col-sm-4 form-group{{ $errors->has('cc_cvc') ? ' has-error' : '' }}">
                                    <label for="cc_cvc">CVC/CVV Code</label>
                                    <input id="cc_cvc" type="tel" class="form-control input-lg cc-cvc" autocomplete="cc-csc" data-stripe="cvc" maxlength="4">

                                    <span class="help-block"></span>

                                </div>

                                <div class="col-sm-4 form-group{{ $errors->has('billing_zip_code') ? ' has-error' : '' }}">
                                    <label for="billing_zip_code">Billing Zip Code</label>
                                    <input id="billing_zip_code" type="tel" autocomplete="postal-code" class="form-control input-lg billing-zip-code" data-stripe="address_zip" maxlength="10">

                                    <span class="help-block"></span>

                                </div>
                            </div>

                            <p>Discreet Drop uses <a href="https://stripe.com/" target="_blank">Stripe</a> to securely  handle all payment processing, and your credit card information and payment information never touches our servers or is stored in our database.<br><br>We use encryption, HTTPS, and SSL security layers to ensure your private information remains private, and are fully PCI compliant so your payment details are safe and secure.<br><br>Your card will only be charged once we receive a package to send out to you, and having a profile set up first makes sure your packages get to you as fast as possible. Feel free to visit our <a href="/trust-and-safety">Trust and Safety Page</a> and <a href="/privacy-policy">Privacy Policy</a> for more information and details on our secure policies and procedures. Don't worry, your personal information will always remain private and secure.</p>
                            <p>By using our service, you agree to our <a href="/terms-of-service">Terms of Service</a> and respect our prohibited and illegal items policy.</p>
                        </div>

                        <div class="current-card @if(empty($user->substantiated_at)) hidden @endif"> 
                            <h4 class="center">Card on File</h4>
                            <div class="row">
                                <div class="col-xs-4">
                                    <h5>Brand: {{$user->stripe_brand}}</h5>
                                </div>
                                <div class="col-xs-4">
                                    <h5>Last 4: {{$user->stripe_last4}}</h5>
                                </div>
                                <div class="col-xs-4">
                                    <h5>Expires: {{$user->stripe_exp_month}}/{{$user->stripe_exp_year}}</h5>
                                </div>
                            </div>
                            <div class="row btn-toolbar">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <button class="btn btn-default btn-block" type="button" onclick="updateCard()">Update Card</button>
                                </div>
                            </div>
                        </div>

                        <div class="row btn-toolbar">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary" id="submit_btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-fw'></i> Saving Changes">Save Changes</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-default btn-block" type="button" onclick="back()">Cancel Changes</button>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
            <div class="center">
                <a href="https://stripe.com/" target="_blank">
                    <img src="/images/powered_by_stripe.png" alt="Powered by Stripe">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">Stripe.setPublishableKey("{{config('services.stripe.key')}}");</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js" integrity="sha256-bEuhxmK0QLOu/l5RR+ot9y+A5RDkl5xlSFp7D/+JTjc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js" integrity="sha256-j9bZfF4eKVp8Zrzq/zna8WWo5lroqN1yKEQ8qvBfK1A=" crossorigin="anonymous"></script>
<script src="/js/user.js"></script>
<script src="/js/profile.js"></script>
@endsection