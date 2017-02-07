function changeMethod() {
    if(confirm("Are you sure you want to delete this?")){
        $('[name="_method"]').val("DELETE");
        $("form").submit();
    }
}

function back() {
     window.location = '/dashboard';
}

function updateCard() {
    $("div.current-card").addClass("hidden");
    $("div.new-card").removeClass("hidden");
}