function changeMethod() {
    if(confirm("Are you sure you want to delete this?")){
        $('[name="_method"]').val("DELETE");
        $("form").submit();
    }
}

function back() {
     window.location = '/dashboard';
}