<?php
//global $xlt_option;

function xl_custom_style() {
    global $xlt_option;
    if ($xlt_option['xl_enable_custom_style']) :
//        var_dump($xlt_option['xl_enable_custom_style']);die;
        ?>

        <style type="text/css">
            /*.header-area {*/
                /*background: #bb1313;*/
            /*}*/
        </style>

        <?php
    endif;
}
add_action( 'wp_head', 'xl_custom_style' );