$('input#zip_code').mask('00000-ZZZZ', {translation:  {'Z': {pattern: /[0-9]/, optional: true}}});

$('form').submit(function(e) {
    e.preventDefault();
    $('#zip_code').parent('.form-group').removeClass('has-error');
    if(!/^\d{5}(-\d{4})?$/.test($('#zip_code').val())){
        $('#zip_code').parent('.form-group').addClass('has-error');
        $('#zip_code').parent('.form-group').children('span.help-block').html('<strong>Please correct this information and try again.</strong>');
        return false;
    }
    $("button#submit").button('loading');
    $.post("/pricing-calculator/submit", $('form').serialize(), function(data) {
        $("div#rate").replaceWith(data);
        $("button#submit").button('reset');
    });
});