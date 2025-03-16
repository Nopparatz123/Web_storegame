window.onload = function() {
    let toast = new bootstrap.Toast(document.getElementById('welcomeToast'));
    toast.show();
    setTimeout(function() {
        toast.hide();
    }, 3000);
};

// $(document).ready(function(){
//     let lastContent = localStorage.getItem('lastContent');
//     if(lastContent){
//         $('.displayContent').hide();
//         $('#' + lastContent).fadeIn();
//     }else{
//         $('.displayContent').hide();
//         $('.displayContent').first().fadeIn();
//     }

//     $('.navShowcontent').on('click', function(e){
//         e.preventDefault();
//         let showContent = $(this).data('content');
//         $('.displayContent').hide();
//         $('#' + showContent).fadeIn();

//         localStorage.setItem('lastContent', showContent);
//     })
// })
