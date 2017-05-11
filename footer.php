<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */
global $xlt_option;
?>

			</div><!--/.container-->
		</div><!--/.section-padding-->
	</section><!--/.page-->
</div><!-- #content -->


<?php
if ($xlt_option['xl_enable_footer_top']) :
    get_sidebar('footer-top');
endif;

if ($xlt_option['xl_enable_footer_widget']) :
    get_sidebar('footer');
endif;
?>

<?php if (($xlt_option['xl_show_copyright']) || ($xlt_option['xl_xltheme_credit'])) : ?>
<!-- Footer Section -->
<footer class="footer-area">
	<div class="container">
		<div class="copyright clearfix">
            <?php if ($xlt_option['xl_show_copyright']) : ?>
            <div class="copyright-text pull-left">
                <?php if ($xlt_option['xl_copyright']) :
                    echo $xlt_option['xl_copyright'];
                else: ?>
                    Copyright &copy; <?php echo date('Y'); ?> <a href="https://www.xltheme.com/">XLTHEME</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($xlt_option['xl_xltheme_credit']) : ?>
			<div class="site-info pull-right">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bloga' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bloga' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
                <a href="<?php echo esc_url( __( 'https://www.xltheme.com/', 'bloga' ) ); ?>"><?php printf( esc_html__( 'Design & developed by %s', 'bloga' ), 'XLTHEME' ); ?></a>
			</div><!-- .site-info -->
            <?php endif; ?>
		</div><!-- /.copyright -->
	</div><!-- /.container -->
</footer><!-- /.footer-area -->
<!-- End Footer Section -->
<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
