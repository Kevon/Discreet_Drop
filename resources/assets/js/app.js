$(window).scroll(function(){
    var wscroll = $(this).scrollTop();
    if(wscroll > 100){
        $(".navbar").addClass("shrink-nav");
        $(".logo").addClass("shrink-logo");
    }
    else{
        $(".navbar").removeClass("shrink-nav");
        $(".logo").removeClass("shrink-logo");
    }
    if(wscroll == 0){
        if(!$(".navbar-toggle").hasClass("focus")){
            $("#mainNav").removeClass("white");
        }
    }
});

function toggle(){
    $("#mainNav").toggleClass("white",true);
    $(".navbar-toggle").toggleClass("focus");
    $(".icon-bar").toggleClass("focus");
};

$("div.content").css("margin-bottom",$(".footer").outerHeight()+150);

if($(window).width() < 410){
    $('div.btn-group').removeClass('btn-group-justified');
    $('div.btn-group').addClass('btn-group-vertical');
} 

$(window).resize(function() {
    $("div.content").css("margin-bottom",$(".footer").outerHeight()+100);
    if($(window).width() < 410){
        $('div.btn-group').removeClass('btn-group-justified');
        $('div.btn-group').addClass('btn-group-vertical');
    } 
    else{
        $('div.btn-group').addClass('btn-group-justified');
        $('div.btn-group').removeClass('btn-group-vertical');
    }
});

$("input, select").blur();

$("input, select").focusout(function(){
    $(this).parents("form").find("label").not(".btn").each(function(){
         $(this).removeClass("faded");
     });
});

$("input, select").focusin(function(){
    if(!$(this).is(':checkbox, :radio')){
        $(this).parents("form").find("label").not(".btn").not($(this).parent("div").find("label")).each(function(){
             $(this).addClass("faded");
        });
    }
});

$(".alerts").animate({bottom:'150px'},500);

window.setTimeout(function(){
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);

window.sr = ScrollReveal();
sr.reveal('div.section *');

function init(){
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i=0; i<vidDefer.length; i++) {
        if(vidDefer[i].getAttribute('data-src')) {
            vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
        } 
    }
}
window.onload = init;