<?php
get_header();
?>
<div class="common-mv">
  <h2>News</h2>
</div>
<main id="primary" class="site-main single-sec">
  <div class="container">
    <div class="new-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="txt-box">
            <div class="col-2box">
              <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
              <p class="cat-name"><?php $cat = get_the_category();
                                  echo $cat[0]->cat_name; ?></p>
            </div>
            <p class="post-ttl"><?php the_title(); ?></p>
          </div>
          <div class="img-box">
            <?php the_post_thumbnail(''); ?>
          </div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <?php
          the_post_navigation(
            array(
              'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'mytheme') . '</span> <span class="nav-title">%title</span>',
              'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'mytheme') . '</span> <span class="nav-title">%title</span>',
            )
          ); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- new-single -->
  </div>
</main><!-- #main -->

<?php
get_footer();
