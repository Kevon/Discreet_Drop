$('form').submit(function(e) {
    e.preventDefault();
    $("button#submit_btn").button('loading');
    $("form[role='form']").get(0).submit();
});