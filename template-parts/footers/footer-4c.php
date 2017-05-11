<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */
?>

<?php if ((is_active_sidebar( 'footer-1' )) || (is_active_sidebar( 'footer-2' )) || (is_active_sidebar( 'footer-3' )) || (is_active_sidebar( 'footer-4' ))) : ?>

    <!-- Footer Widget Section -->
    <section class="footer-widget">
        <div class="section-padding pbottom-0">
            <div class="container">
                <div class="row">
                    <?php if (is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                    <?php endif; ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.footer-widget -->
    <!-- End Footer Widget Section -->

<?php endif; ?>