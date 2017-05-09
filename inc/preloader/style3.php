<?php
function xl_preloader_markup() {
    echo '<div class="preloader-box">
            <div class="spinner">
              <div class="rect1"></div>
              <div class="rect2"></div>
              <div class="rect3"></div>
              <div class="rect4"></div>
              <div class="rect5"></div>
            </div>
          </div>';
}
add_action('body_begin', 'xl_preloader_markup');

function xl_preloader_style() {
    global $xlt_option;

    ?>

    <style type="text/css">
        .preloader-box {
            position: fixed;
            background: <?php echo $xlt_option['xl_preloader_bg_color'] ? $xlt_option['xl_preloader_bg_color'] : '#2980b9'?>;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99999999999;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .spinner {
            margin: 100px auto;
            width: 50px;
            height: 40px;
            text-align: center;
            font-size: 10px;
        }

        .spinner > div {
            background-color: <?php echo $xlt_option['xl_preloader_color'] ? $xlt_option['xl_preloader_color'] : '#fff'?>;
            height: 100%;
            width: 6px;
            display: inline-block;

            -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
            animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .spinner .rect3 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .spinner .rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .spinner .rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {
            0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
            20% { -webkit-transform: scaleY(1.0) }
        }

        @keyframes sk-stretchdelay {
            0%, 40%, 100% {
                transform: scaleY(0.4);
                -webkit-transform: scaleY(0.4);
            }  20% {
                   transform: scaleY(1.0);
                   -webkit-transform: scaleY(1.0);
               }
        }
    </style>

    <?php

}
add_action('wp_head', 'xl_preloader_style');
