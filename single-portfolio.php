<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bloga
 */

// Project Header image
$header_image = get_post_meta($post->ID, '_xl_header_portfolio_img', true);
// project skill
$skill = get_post_meta( $post->ID, '_xl_project_skill', true );

get_header();
?>
    <div id="primary" class="content-area portfolio">
        <main id="main" class="site-main">
            <div class="page-heading"
                 style="
                 <?php if ($header_image):?>
                     background-image: url(<?php echo $header_image;?>);
                     height: 450px;
                     background-size: cover;
                     background-position: center;
                 <?php else: ?>
                     background-color: #ddd;
                     height: 450px;
                 <?php endif;?>"
            >

                <div class="container">
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title tm0 bm30">', '</h1>'); ?>
                    </header><!-- .entry-header -->
                </div>
            </div><!-- .post details -->


            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php
                        $portfolio = array(
                            'post_type'         => 'portfolio',
                            'post_status'       => 'publish',
                            'ignore_sticky_posts' => 1
                        );
                        ?>


                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content-single', 'portfolio');



                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                        <div class="row related-project">
                            <h3 class="related-title">
                                <?php esc_html_e('Related Projects', 'bloga-pro');?>
                            </h3>
                            <?php

                            // get the custom post type's taxonomy terms

                            $custom_taxterms = wp_get_object_terms( $post->ID, 'filters', array('fields' => 'ids') );
                            // arguments
                            $args = array(
                                'post_type' => 'portfolio',
                                'post_status' => 'publish',
                                'posts_per_page' => 3, // you may edit this number
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'filters',
                                        'field' => 'id',
                                        'terms' => $custom_taxterms
                                    )
                                ),
                                'post__not_in' => array ($post->ID),
                            );

                            $related_items = new WP_Query( $args );?>



                            <?php
                            // loop over query
                            if ($related_items->have_posts()) :
                                while ( $related_items->have_posts() ) : $related_items->the_post();
                                    ?>
                                    <div class="wrapper col-md-4 col-lg-4 col-xs-12 col-sm-12">

                                        <?php if ( has_post_thumbnail()):?>
                                            <figure class="related-thumbnail">
                                                <a href="<?php the_permalink();?>">
                                                    <?php the_post_thumbnail();?>

                                                </a>

                                                <header class="related-info">
                                                    <h4 class="related-post-title text-uppercase">
                                                        <?php the_title(); ?>
                                                    </h4>
                                                    <?php
                                                    // project skill
                                                    $skill = get_post_meta( $post->ID, $prefix . 'item_skill', true );
                                                    ?>
                                                    <p><?php echo $skill;?></p>


                                                    <a class="icon-link" href="<?php the_permalink(); ?>">
                                                        <i class="fa fa-link"></i>

                                                    </a>
                                                </header><!-- .related-info -->
                                            </figure><!-- .related-thumbnanil -->
                                        <?php endif;?>
                                    </div><!-- /.col-md-4 -->
                                <?php endwhile; endif; wp_reset_postdata();?>
                        </div><!-- /.related-project -->
                    </div> <!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
