// alert
window.onload = function() {
    let toast = new bootstrap.Toast(document.getElementById('welcomeToast'));
    toast.show();
    setTimeout(function() {
        toast.hide();
    }, 3000);
};

// change active
$(document).ready(function() {
    let currentUrl = window.location.pathname;
    $(".navbar-nav .nav-link").each(function() {
        var linkUrl = $(this).attr("href");

        if (currentUrl === linkUrl) {
            $(this).addClass("actives");
        }
    });

    $(".navbar-nav .nav-link").on("click", function() {
        $(".navbar-nav .nav-link").removeClass("actives");
        $(this).addClass("actives");
    });

        // let lastContent = localStorage.getItem('lastContent');
        // if(lastContent){
        //     $('.displayContent').hide();
        //     $('.displayContent').first().fadeIn();
        // }else{
        //     $('.displayContent').hide();
        //     $('.displayContent').first().fadeIn();
        // }
    
        // $('.navShowcontent').on('click', function(e){
        //     e.preventDefault();
        //     let showContent = $(this).data('content');
        //     $('.displayContent').hide();
        //     $('#' + showContent).fadeIn();
    
        //     localStorage.setItem('lastContent', showContent);
        // })
});



