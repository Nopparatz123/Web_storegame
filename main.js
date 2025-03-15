window.onload = function() {
    let toast = new bootstrap.Toast(document.getElementById('welcomeToast'));
    toast.show();
    
    // ซ่อนหลังจาก 3 วินาที
    setTimeout(function() {
        toast.hide();
    }, 3000);
};
