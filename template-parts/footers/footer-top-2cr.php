<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */
?>

<?php if ((is_active_sidebar( 'footer-top-1' )) || (is_active_sidebar( 'footer-top-2' ))) : ?>

    <!-- Footer Widget Section -->
    <section class="footer-top-widget">
        <div class="section-padding pbottom-0">
            <div class="container">
                <div class="row">
                    <?php if (is_active_sidebar( 'footer-top-1' )) : ?>
                        <div class="col-md-8">
                            <?php dynamic_sidebar( 'footer-top-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'footer-top-2' )) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar( 'footer-top-2' ); ?>
                        </div>
                    <?php endif; ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.footer-widget -->
    <!-- End Footer Widget Section -->

<?php endif; ?>