<?php
function xl_preloader_markup() {
    echo '<div class="preloader-box">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
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
            width: 40px;
            height: 40px;
            position: relative;
        }

        .cube1, .cube2 {
            background-color: <?php echo $xlt_option['xl_preloader_color'] ? $xlt_option['xl_preloader_color'] : '#fff'?>;
            width: 15px;
            height: 15px;
            position: absolute;
            top: 0;
            left: 0;

            -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
            animation: sk-cubemove 1.8s infinite ease-in-out;
        }

        .cube2 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        @-webkit-keyframes sk-cubemove {
            25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
            50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
            75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
            100% { -webkit-transform: rotate(-360deg) }
        }

        @keyframes sk-cubemove {
            25% {
                transform: translateX(42px) rotate(-90deg) scale(0.5);
                -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
            } 50% {
                  transform: translateX(42px) translateY(42px) rotate(-179deg);
                  -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
              } 50.1% {
                    transform: translateX(42px) translateY(42px) rotate(-180deg);
                    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
                } 75% {
                      transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
                      -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
                  } 100% {
                        transform: rotate(-360deg);
                        -webkit-transform: rotate(-360deg);
                    }
        }
    </style>

    <?php

}
add_action('wp_head', 'xl_preloader_style');
