function updateCard() {
    $("div.current-card").addClass("hidden");
    $("div.new-card").removeClass("hidden");
}

$('input.cc-number').payment('formatCardNumber');
$('input.cc-exp').payment('formatCardExpiry');
$('input.cc-cvc').payment('formatCardCVC');
$('input#zip_code').mask('00000-ZZZZ', {translation:  {'Z': {pattern: /[0-9]/, optional: true}}});
$('input#billing_zip_code').mask('00000-ZZZZ', {translation:  {'Z': {pattern: /[0-9]/, optional: true}}});
$('input#phone').mask('(000) 000-0000');

$.fn.toggleInputError = function(erred) {
    this.parent('.form-group').toggleClass('has-error', erred);
    if(erred){
        this.parent('.form-group').children('span.help-block').html('<strong>Please correct this information and try again.</strong>');
    }
    return this;
};

$('form#profile-form').submit(function(e) {
    e.preventDefault();
    $("button#submit_btn").button('loading');
    if($.trim($('input.cc-number').val()).length){
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.billing-zip-code').parent('.form-group').removeClass('has-error');
        if(!/^\d{5}(-\d{4})?$/.test($('.billing-zip-code').val())){
            $('.billing-zip-code').parent('.form-group').addClass('has-error');
            $('.billing-zip-code').parent('.form-group').children('span.help-block').html('<strong>Please correct this information and try again.</strong>');
            $("button#submit_btn").button('reset');
            return false;
        }

        var $form = $('#profile-form');
        // Disable the submit button to prevent repeated clicks:
        $form.find('.submit').prop('disabled', true);
        // Request a token from Stripe:
        Stripe.card.createToken({
            number: $('.cc-number').val(),
            cvc: $('.cc-cvc').val(),
            exp: $('.cc-exp').val(),
            address_zip: $('.billing-zip-code').val()
            }, stripeResponseHandler);

        // Prevent the form from being submitted:
        $("button#submit_btn").button('reset');
        return false;
    }
    else{
        $('#profile-form').get(0).submit();
    }
});

function stripeResponseHandler(status, response) {
    // Grab the form:
    var $form = $('#profile-form');

    if (response.error) { // Problem!

        // Show the errors on the form:
        $form.find('.cc-label').text(response.error.message);
        $form.find('.cc-label').addClass('has-error');
        $form.find('.submit').prop('disabled', false); // Re-enable submission

        } else { // Token was created!

        // Get the token ID:
        var token = response.id;

        // Insert the token ID into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken">').val(token));
        
        // Submit the form:
        $form.get(0).submit();
    }
};