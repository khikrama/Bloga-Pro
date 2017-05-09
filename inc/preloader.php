<?php
global $xlt_option;

$preloader_style = $xlt_option['xl_preloader_style'];

switch ($preloader_style) {
    case 1 :
        include 'preloader/style1.php';
        break;
    case 2 :
        include 'preloader/style2.php';
        break;
    case 3 :
        include 'preloader/style3.php';
        break;
    case 4 :
        include 'preloader/style4.php';
        break;
    case 5 :
        include 'preloader/style5.php';
        break;
    case 6 :
        include 'preloader/style6.php';
        break;
    case 7 :
        include 'preloader/style7.php';
        break;
    case 8 :
        include 'preloader/style8.php';
        break;
    case 9 :
        include 'preloader/style9.php';
        break;
    case 10 :
        include 'preloader/style10.php';
        break;
    case 11 :
        include 'preloader/style11.php';
        break;
    default :
        include 'preloader/style1.php';
}

function xl_preloader_script() {
    ?>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $(window).load(function () {
                    $('.preloader-box').fadeOut('slow', function () {
                        $(this).remove();
                    });
                });
            });
        })(jQuery);
    </script>


    <?php
}
add_action('wp_footer', 'xl_preloader_script');


