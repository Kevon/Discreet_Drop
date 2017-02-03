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
        $("#mainNav").removeClass("white");
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
