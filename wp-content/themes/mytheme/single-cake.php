<?php
/*
	Template Name:single-cake
*/

get_header();
?>
<div class="common-mv">
  <h2>Cake</h2>
</div>
<main id="primary" class="site-main single-sec">
  <div class="container">
    <div class="archive-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="txt-box">
            <p class="post-ttl"><?php the_title(); ?></p>
            <p><?php the_content(); ?></p>
          </div>
          <div class="img">
            <?php the_post_thumbnail(''); ?>
          </div>
          <div class="single_navigation">
            <span class="page-l">
              <?php previous_post('&laquo; % | ','PRE','no') ?>
            </span>  
            <span class="single_new_list"><a href="<?php echo esc_url( home_url( '/cake' ) ); ?>">Cake</a></span>
            <span class="page-r">
              <?php next_post(' | % &raquo;','NEXT','no') ?>
            </span>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- new-single -->
  </div>
</main><!-- #main -->

<?php
get_footer();
