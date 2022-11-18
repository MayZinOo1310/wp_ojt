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
