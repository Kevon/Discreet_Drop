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

$("div.content").css("margin-bottom",$(".footer").outerHeight()+100);

$(window).resize(function() {
    $("div.content").css("margin-bottom",$(".footer").outerHeight()+100);
});

$("input").focusout(function() {
    $(this).parent("div").parent("form").children("div").children("label").each(function(){
         $(this).removeClass("faded");
     });
});

$("input").focusin(function() {
    if(!$(this).is(':checkbox')){
    $(this).parent("div").parent("form").children("div").children("label").not($(this).parent("div").children("label")).each(function(){
         $(this).addClass("faded");
     });
    }
});

$(".alerts").animate({bottom:'50px'},2000);

window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);