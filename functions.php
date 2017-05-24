<?php
/**
 * Bloga functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Bloga
 */

if ( ! function_exists( 'bloga_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloga_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bloga, use a find and replace
	 * to change 'bloga' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bloga', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'bloga-image-full', 1140, 500, true );
	add_image_size( 'bloga-image-thumb', 770, 340, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bloga' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'audio',
		'quote',
		'link',
	) );

	add_theme_support( 'html5', array( 'search-form' ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bloga_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_editor_style('');
}
endif; // bloga_setup
add_action( 'after_setup_theme', 'bloga_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloga_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloga_content_width', 640 );
}
add_action( 'after_setup_theme', 'bloga_content_width', 0 );


/**
 * Custom Excerpt length
 */
function xl_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'xl_excerpt_length', 999 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloga_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 1', 'bloga' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Top 1', 'bloga' ),
        'id'            => 'footer-top-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Top 2', 'bloga' ),
        'id'            => 'footer-top-2',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'bloga' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'bloga' ),
        'id'            => 'footer-2',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'bloga' ),
        'id'            => 'footer-3',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'bloga' ),
        'id'            => 'footer-4',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'bloga_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bloga_scripts() {
    global $xlt_option;
	wp_enqueue_style( 'bloga-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bloga-plugins', get_template_directory_uri() . '/assets/css/plugins.css' );
	wp_enqueue_style( 'bloga-main', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'bloga-theme-style', get_template_directory_uri() . '/assets/css/' . $xlt_option['xl_theme_style'] .'.css' );
	wp_enqueue_style( 'bloga-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'bloga-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0
	.0', true );
	wp_enqueue_script( 'bloga-functions', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bloga-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'bloga-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bloga_scripts' );

/**
 * Default Menu.
 */
function bloga_default_menu(){
	echo '<ul class="nav navbar-nav navbar-right sm sm-blue main-menu">';
	if (is_user_logged_in()) {
		echo '<li><a href="'.home_url().'/wp-admin/nav-menus.php">'.esc_html__( 'Create a Menu', 'bloga' ).'</a></li>';
	} else {
		echo '<li><a href="'.home_url().'">'.esc_html__( 'Home', 'bloga' ).'</a></li>';
	}
	echo '</ul>';
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Metabox
 */
require get_template_directory() . '/vendors/cmb2/init.php';
require get_template_directory() . '/vendors/meta_boxes.php';


/**
 * Admin Panel
 */
require get_template_directory() . '/vendors/redux/ReduxCore/framework.php';
require get_template_directory() . '/vendors/admin_options.php';

/** Remove redux menu under the tools **/
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}
add_action( 'admin_menu', 'remove_redux_menu',12 );

//Call admin option for function.php
Redux::init( 'xlt_option' );

//Custom Hook
function body_begin() {
    do_action('body_begin');
}

// Preloader
if ($xlt_option['xl_enable_preloader']) {
    include get_template_directory() . '/inc/preloader.php';
}

// Custom Style
//include get_template_directory() . '/inc/custom-style.php';

