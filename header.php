<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */
global $xlt_option;
$show_title = get_post_meta(get_the_ID(), '_xl_show_title', true);
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo $xlt_option['xl_favicon']['url']; ?>" />

<?php if (!empty($xlt_option['custom_css'])) : ?>
    <style type="text/css">
        <?php echo $xlt_option['custom_css']; ?>
    </style>
<?php endif; ?>

<?php if (!empty($xlt_option['xl_tracking_code'])) : ?>
    <?php echo $xlt_option['xl_tracking_code']; ?>
<?php endif; ?>

<?php wp_head(); ?>

<?php if (!empty($xlt_option['xl_space_before_head'])) : ?>
    <?php echo $xlt_option['xl_space_before_head']; ?>
<?php endif; ?>



    <!--Sricky Nav-->
    <?php if ($xlt_option['sticky_header']) : ?>
        <script type="text/javascript">
            (function($) {

                $( document ).ready(function() {

                    var heightTop = $('.header-top').innerHeight();
                    var heightHeader = $('.header-area').innerHeight();
//                    var totalHeight = heightTop + heightHeader;
                    var totalHeight = heightTop;
//                console.log(heightTop);
//                console.log(heightHeader);
//                console.log(totalHeight);

                    //top menu
                    $(window).bind('scroll', function () {
                        if ($(window).scrollTop() > totalHeight) {
                            $('.header-area').addClass('navbar-fixed-top');
                        } else {
                            $('.header-area').removeClass('navbar-fixed-top');
                        }
                    });

                });
            })(jQuery);
        </script>
    <?php endif; ?>



</head>

<body <?php body_class(); ?>>

<?php body_begin(); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bloga' ); ?></a>

    <?php

        $header_style = $xlt_option['header_style'];

        switch ($header_style) {
            case 1 :
                include ('template-parts/headers/header-default.php');
                break;
            case 2 :
                include ('template-parts/headers/header1.php');
                break;
            default :
                include ('template-parts/headers/header-default.php');
        }
    ?>

    <?php if ($xlt_option['sticky_header']) : ?>
<!--	<div class="blank"></div>-->
    <?php endif; ?>
	<!-- End Header Section -->


	<div id="content" class="site-content">

		<!-- Blog Section -->
		<section id="blog-page" class="page blog-page">
			<div class="section-padding <?php echo $show_title; ?>">
				

