<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <p class="center"><strong>Your shipping profile must be filled out before your Discreet Drop address is created and you can start shipping to us.</strong></p>
                @if (Request::path() == "/profile_info")
                    <p class="center"><strong><a href="/profile_info">Please click here to complete your shipping profile and start shipping any package you want to arrive 100% discreet.</a></strong></p>
                @endif
                <p class="center">Once your profile is complete, you can create orders and start shipping any package you want to arrive to you as discreet as possible, and we'll automatically re-package your item to hide all identifying information and logos, charge your card securely stored on <a href="https://stripe.com/" target="_blank">Stripe</a> (and never on our servers) the lowest shipping rate, and we'll be able to send your package out to you via the USPS as fast as possible.</p>
            </div>
        </div>
    </div>
</div>