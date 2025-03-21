<?php
    function alert($title, $text, $icon, $url){
        echo "
        <script>
            Swal.fire({
                title: \"$title\",
                text: \"$text\",
                icon: \"$icon\"
            }).then(() => {
                window.location.href = \"$url\";
            });
        </script>
        ";
        exit();
    }

    function alertToast($text, $colorText, $bgColor){
        echo "
        <div class='toast-container position-fixed bottom-0 end-0 mb-2 p-3'>
            <div id='welcomeToast' class='toast shadow-sm bg-$bgColor p-1' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-body text-$colorText'>
                    $text
                </div>
            </div>
        </div>     
        ";
    }    

?>
