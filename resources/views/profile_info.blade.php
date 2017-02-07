@extends('layouts.app')
@section('subtitle', 'Update Shipping Profile')
@section('description', 'Hide logos, return labels, invoices, holes, and all other identifying information on any package from any seller so your item arrives as discreet as possible.')


@section('header')

@endsection


@section('content')
<div class="container content">
    @if(empty($user->substantiated_at))
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                @include('partials.profile_alert')
            </div>
        </div>
    @endif 
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading center">Update Shipping Profile</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" method="POST" action="{{ url('/login') }}" autocomplete="on">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                
                                <h4>Your Shipping Address</h4>
                                
                                <div class="row">
                                    <div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">First Name</label>
                                        <input id="password" type="text" class="form-control input-lg" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Last Name</label>
                                        <input id="password" type="text" class="form-control input-lg" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Address Line 1</label>
                                    <input id="password" type="text" class="form-control input-lg" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Address Line 2 - Optional</label>
                                    <input id="password" type="text" class="form-control input-lg" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-5 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">City</label>
                                        <input id="password" type="text" class="form-control input-lg" name="password"  required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">State</label>
                                        <select id="password" class="form-control input-lg" name="password"  required>
                                                @if(empty($user->substantiated_at))<option selected disabled hidden class="hidden"></option>@endif
                                                <option value="AL">AL</option>
                                                <option value="AK">AK</option>
                                                <option value="AZ">AZ</option>
                                                <option value="AR">AR</option>
                                                <option value="CA">CA</option>
                                                <option value="CO">CO</option>
                                                <option value="CT">CT</option>
                                                <option value="DE">DE</option>
                                                <option value="DC">DC</option>
                                                <option value="FL">FL</option>
                                                <option value="GA">GA</option>
                                                <option value="HI">HI</option>
                                                <option value="ID">ID</option>
                                                <option value="IL">IL</option>
                                                <option value="IN">IN</option>
                                                <option value="IA">IA</option>
                                                <option value="KS">KS</option>
                                                <option value="KY">KY</option>
                                                <option value="LA">LA</option>
                                                <option value="ME">ME</option>
                                                <option value="MD">MD</option>
                                                <option value="MA">MA</option>
                                                <option value="MI">MI</option>
                                                <option value="MN">MN</option>
                                                <option value="MS">MS</option>
                                                <option value="MO">MO</option>
                                                <option value="MT">MT</option>
                                                <option value="NE">NE</option>
                                                <option value="NV">NV</option>
                                                <option value="NH">NH</option>
                                                <option value="NJ">NJ</option>
                                                <option value="NM">NM</option>
                                                <option value="NY">NY</option>
                                                <option value="NC">NC</option>
                                                <option value="ND">ND</option>
                                                <option value="OH">OH</option>
                                                <option value="OK">OK</option>
                                                <option value="OR">OR</option>
                                                <option value="PA">PA</option>
                                                <option value="RI">RI</option>
                                                <option value="SC">SC</option>
                                                <option value="SD">SD</option>
                                                <option value="TN">TN</option>
                                                <option value="TX">TX</option>
                                                <option value="UT">UT</option>
                                                <option value="VT">VT</option>
                                                <option value="VA">VA</option>
                                                <option value="WA">WA</option>
                                                <option value="WV">WV</option>
                                                <option value="WI">WI</option>
                                                <option value="WY">WY</option>
                                        </select>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Zip Code</label>
                                        <input id="password" type="tel" class="form-control input-lg" name="password" maxlength="10"  required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Phone Number - Optional</label>
                                    <input id="password" type="tel" class="form-control input-lg" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                
                                <hr>
                                
                                <div class="new-card @if(!empty($user->substantiated_at)) hidden @endif")> 
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
                                        <input id="password" type="tel" autocomplete="cc-number" class="form-control input-lg cc-number" name="password" maxlength="16">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Exp</label>
                                            <input id="password" type="tel" autocomplete="cc-exp" class="form-control input-lg cc-exp" name="password" placeholder="MM/YY">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">CVC</label>
                                            <input id="password" type="tel" class="form-control input-lg cc-cvc" name="password" autocomplete="off" maxlength="4">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Billing Zip Code</label>
                                            <input id="password" type="tel" class="form-control input-lg" name="password" maxlength="10">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                    
                                <div class="current-card @if(empty($user->substantiated_at)) hidden @endif"> 
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
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js" integrity="sha256-bEuhxmK0QLOu/l5RR+ot9y+A5RDkl5xlSFp7D/+JTjc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js" integrity="sha256-j9bZfF4eKVp8Zrzq/zna8WWo5lroqN1yKEQ8qvBfK1A=" crossorigin="anonymous"></script>
<script src="/js/profile.js"></script>
@endsection


