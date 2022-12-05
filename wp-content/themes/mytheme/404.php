<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mytheme
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div class="container">
      <section class="error-404 not-found">
        <header class="page-header">
          <h2 class="page-title"><?php esc_html_e( 'Not Found', '' ); ?></h2>
        </header><!-- .page-header -->

        <div class="page-content">
          <p><?php esc_html_e( 'Please check the URL', '' ); ?></p>
          <p>Otherwise, <a href="<?php echo esc_url(home_url('/')); ?>">click here</a> to be redirected to the homepage.</p>
          <?php get_search_form(); ?>
        </div><!-- .page-content -->
      </section><!-- .error-404 -->
    </container>

	</main><!-- #main -->

<?php
get_footer();
