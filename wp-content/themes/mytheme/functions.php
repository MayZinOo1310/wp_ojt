<?php

/**
 * mytheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mytheme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Enqueue scripts and styles.
 */
function mytheme_scripts()
{
	wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('mytheme-style', 'rtl', 'replace');
	wp_enqueue_style('slickcss', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('commonstyle', get_template_directory_uri() . '/assets/css/common.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all');

	wp_enqueue_script('mytheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('slickjs', get_template_directory_uri() . '/js/swiper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

/**
 * This theme uses wp_nav_menu() in one location.
 */
function mytheme_menu()
{
	register_nav_menus(
		array(
			'main-menu' => __('Primary Menu'),
			'menu-1' => __('Secondary Menu'),
			'menu-2' => __('Footer Menu'),
		)
	);
}
add_action('init', 'mytheme_menu');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mytheme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mytheme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mytheme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mytheme_widgets_init');

/**
 * template_uri
 */
function template_uri()
{
	return get_template_directory_uri();
}
add_shortcode("template_uri", "template_uri");

/**
 * add_theme_support
 */
add_theme_support('post-thumbnails');

/**
 * Menu Custom Post Type
 */
// function menu_init()
// {
// 	// set up menu labels
// 	$labels = array(
// 		'name' => 'Menus',
// 		'singular_name' => 'Menu',
// 		'add_new' => 'Add New',
// 		'add_new_item' => 'Add New',
// 		'edit_item' => 'Edit Menu',
// 		'new_item' => 'New Menu',
// 		'all_items' => 'All Menus',
// 		'view_item' => 'View Menu',
// 		'search_items' => 'Search Menus',
// 		'not_found' =>  'No Menus Found',
// 		'not_found_in_trash' => 'No Menus found in Trash',
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Menus',
// 	);

// 	// register post type
// 	$args = array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'has_archive' => true,
// 		'show_ui' => true,
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'rewrite' => array('slug' => 'menu'),
// 		'query_var' => true,
// 		'menu_icon' => 'dashicons-randomize',
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'excerpt',
// 			'trackbacks',
// 			'custom-fields',
// 			'comments',
// 			'revisions',
// 			'thumbnail',
// 			'author',
// 			'page-attributes'
// 		)
// 	);
// 	register_post_type('menu', $args);

// 	// register taxonomy
// 	register_taxonomy('menu_category', 'menu', array('hierarchical' => true, 'label' => 'Menu Type', 'query_var' => true, 'rewrite' => array('slug' => 'menu-category')));
// }
// add_action('init', 'menu_init');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mytheme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mytheme, use a find and replace
		* to change 'mytheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mytheme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mytheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'mytheme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mytheme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mytheme_content_width', 640);
}
add_action('after_setup_theme', 'mytheme_content_width', 0);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}