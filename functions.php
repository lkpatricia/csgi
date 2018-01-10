<?php
/**
 * CSG - Together you win functions and definitions
 *
 * @package CSG_-_Together_you_win
 */

if ( ! function_exists( 'csgi_setup' ) ) :

function csgi_setup() {

	load_theme_textdomain( 'csgi', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary Menu', 'csgi' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'csgi_setup' );

function csgi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'csgi_content_width', 800 );
}
add_action( 'after_setup_theme', 'csgi_content_width', 0 );

// Remove WP version number
remove_action('wp_head', 'wp_generator');

// Disable WP Emojis
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter function used to remove the tinymce emoji plugin.
* 
* @param array $plugins 
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}

function csgi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'csgi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'csgi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'csgi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function csgi_scripts() {
	wp_enqueue_style( 'csgi-style', get_template_directory_uri() . '/dist/css/main.css' );
	
	wp_enqueue_script( 'autocomplete', get_template_directory_uri() . '/dist/js/jquery.swiftype.autocomplete.js', array('jquery') );
	wp_enqueue_script( 'hash', get_template_directory_uri() . '/dist/js/jquery.ba-hashchange.min.js', array('jquery') );
	wp_enqueue_script( 'swiftype', get_template_directory_uri() . '/dist/js/jquery.swiftype.search.js', array('jquery') );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), null, true );

	// Only load fullPage js on homepage and non-phone devices
//	if ( is_front_page() && (!isPhoneDevice) ) {
    	if ( is_front_page() ) {
		wp_enqueue_style( 'full-page-css', get_template_directory_uri() . '/dist/css/jquery.fullpage.min.css' );
		wp_enqueue_script( 'scrolloverflow-js', get_template_directory_uri() . '/dist/js/scrolloverflow.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'full-page-js', get_template_directory_uri() . '/dist/js/jquery.fullpage.min.js', array('jquery'), null, true );
	}
	
	// Search results page only
	if ( is_page( 'search' ) ) {
		wp_enqueue_script( 'search-results', get_template_directory_uri() . '/dist/js/search.min.js', array('jquery'), null, true );
	}

}
add_action( 'wp_enqueue_scripts', 'csgi_scripts' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class.taxonomy-single-term.php';
require get_template_directory() . '/inc/csgi-taxonomies.php';
require get_template_directory() . '/inc/csgi-cpts.php';
require get_template_directory() . '/inc/csgi-functions.php';
require get_template_directory() . '/inc/csgi-acf.php';
require get_template_directory() . '/inc/csgi-q4.php';
require get_template_directory() . '/inc/csgi-cron.php';
require get_template_directory() . '/inc/menu-tax-archives.php';
require get_template_directory() . '/inc/csgi-rewrites.php';
