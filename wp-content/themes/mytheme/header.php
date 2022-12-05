<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>
		<?php if(is_front_page() && is_home()) {echo "Top Page";}?>
		<?php if(is_category()){
			echo "Category Page";
		}
		?>
		<?php 
			if(is_single()) {
				echo "Single Page";
			}
		?>
    <?php 
			if(is_404()) {
				echo "404 Page";
			}
		?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header id="masthead" class="site-header header">
      <div class="container">
        <div class="menu-bar">
          <h1 class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="logo"></a>
          </h1>

          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'mytheme'); ?></button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </nav><!-- #site-navigation -->
        </div>
      </div>
    </header><!-- #masthead -->