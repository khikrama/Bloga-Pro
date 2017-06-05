<?php
global $xlt_option;

function xl_custom_style() {
    global $xlt_option;
    if ($xlt_option['xl_enable_custom_style']) :
//        var_dump($xlt_option['header-border-top-color']['rgba']);die;
        ?>

        <style type="text/css">
            .header-area {
                border-top-color: <?php echo $xlt_option['header-border-top-color']['rgba']; ?>;
                border-bottom-color: <?php echo $xlt_option['header-border-bottom-color']['rgba']; ?>;
            }
        </style>

        <?php
    endif;
}
add_action( 'wp_head', 'xl_custom_style' );