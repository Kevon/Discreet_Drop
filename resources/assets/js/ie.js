var ua = window.navigator.userAgent;
var ms_ie = ~ua.indexOf('MSIE ') || ~ua.indexOf('Trident/');
if(ms_ie){
    $("<div class='alert alert-danger alerts'><strong>Internet Explorer is years out of date!</strong><br><br>Please upgrade to literally any modern browser (we recommend Google Chrome) to improve your web experience on Discreet Drop, and everywhere else online for that matter.<br><br>Until then, <strong>Discreet Drop will not look or function correctly in your current web browser!</strong></div>").insertBefore('footer');
};