<?php
function xl_preloader_markup() {
    echo '<div class="preloader-box"><div class="spinner"></div></div>';
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
            width: 40px;
            height: 40px;
            background-color: <?php echo $xlt_option['xl_preloader_color'] ? $xlt_option['xl_preloader_color'] : '#fff'?>;

            margin: 100px auto;
            -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
            animation: sk-rotateplane 1.2s infinite ease-in-out;
        }

        @-webkit-keyframes sk-rotateplane {
            0% { -webkit-transform: perspective(120px) }
            50% { -webkit-transform: perspective(120px) rotateY(180deg) }
            100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
        }

        @keyframes sk-rotateplane {
            0% {
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
            } 50% {
                  transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                  -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
              } 100% {
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                }
        }
    </style>

    <?php

}
add_action('wp_head', 'xl_preloader_style');
