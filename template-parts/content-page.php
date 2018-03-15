<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloga
 */
// Show Page Title
$show_title = get_post_meta(get_the_ID(), '_xl_show_title', true);
// Page Header image
$page_header_img = get_post_meta($post_id, '_xl_page_header_img', true);
// Page title
$custom_page_title = get_post_meta($post_id, '_xl_custom_page_title', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($show_title == 'yes') : ?>
		<div class="page-heading" 
			style="
			<?php if ($page_header_img):?>
				background-image: url(<?php echo $page_header_img;?>);
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
					<?php if ($custom_page_title) : ?>
						<h2 class="entry-title tm0 bm30" ><?php echo $custom_page_title; ?></h2>
					<?php else : ?>
						<?php the_title('<h1 class="entry-title tm0 bm30">', '</h1>'); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div>
		</div>		
    <?php endif; ?>

	<div class="container">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'bloga'),
					'after' => '</div>',
				));
			?>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<div class="container">
			<?php edit_post_link(esc_html__('Edit', 'bloga'), '<span class="edit-link">', '</span>'); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

