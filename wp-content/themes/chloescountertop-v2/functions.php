<?php
/**
 * Goatsocial Starter Theme functions and definitions.
 *
 * @link https://goatsocial.com
 *
 * @package Goatsocial_Starter_Theme
 */

if ( ! function_exists( 'goatsocial_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function goatsocial_starter_setup() {

	// Add custom Thumbail sizes
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size('featured-img', 940, 530, array( 'center', 'center' ));
	add_image_size('square', 300, 300, array( 'center', 'center' ));
	add_image_size('thumbnail', 150, 150, array( 'center', 'center' ));

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // goatsocial_starter_setup
add_action( 'after_setup_theme', 'goatsocial_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function goatsocial_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'goatsocial_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'goatsocial_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goatsocial_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'goatsocial_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function goatsocial_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'goatsocial_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function goatsocial_starter_scripts() {

	//Don't use WordPress' local copy of jquery, load our own version from a CDN instead
	wp_deregister_script('jquery');
	// wp_enqueue_script(
	// 	'jquery',
	// 	"http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
	// 	false, //dependencies
	// 	null, //version number
	// 	true //load in footer
	// );

	// Load jQuery
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/build/js/jquery.min.js', array(), '1.4.1', true );

	// Font-awesome
	wp_enqueue_style ( 'font-awesome-cdn' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.4.0');

	// Stylesheet
	wp_enqueue_style( 'goatsocial-starter-style', get_stylesheet_uri() );

	// Link Focus
	wp_enqueue_script( 'goatsocial-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	// Load scripts
	wp_enqueue_script( 'scripts.min.js', get_template_directory_uri() . '/build/js/scripts.min.js', array( 'jquery' ), '1.9.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'goatsocial_starter_scripts' );

/**
 * A Function specific to ACF for creating an Options Page
 * Change Company info to something else -- shows in admin bar
 */

if( function_exists('acf_add_options_page') ) {

	// acf_add_options_page();
	acf_add_options_page('Company Info');
}

/*
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * A function to allow for SVG files
 */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Prints inline script to output the input parameter to the browser console.
 */

function DebugLog($var) {
	$script = '<script>console.debug(' . json_encode($var) . ');</script>';
	if(function_exists('add_action')) {
		add_action('wp_print_footer_scripts',function() use($script) {
			echo $script;
		}, 9999);
		add_action('admin_print_footer_scripts',function() use($script) {
			echo $script;
		}, 9999);
	}else {
		echo $script;
	}

}/* log() */
