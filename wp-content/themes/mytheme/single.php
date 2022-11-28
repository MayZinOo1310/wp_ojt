<?php
get_header();
?>
<div class="common-mv">
  <?php if( has_tag()): ?>
  <h2>Tags</h2>
  <?php else : ?>
  <h2>News</h2>
  <?php
 endif; ?>
</div>
<main id="primary" class="site-main single-sec">
  <div class="container">
    <div class="new-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="txt-box">
            <p class="post-ttl"><?php the_title(); ?></p>
          </div>
          <div class="img-box">
            <?php the_post_thumbnail(''); ?>
          </div>
          <div class="col-2box">
              <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
              <!-- <p class="cat-name"><?php $cat = get_the_category();
              echo $cat[0]->cat_name; ?></p> -->
          </div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="single_navigation">
            <span class="page-l">
              <?php previous_post('&laquo; % | ','PRE','no') ?>
            </span>
            <?php if( has_tag()): ?>  
              <span class="single_new_list"><a href="<?php echo esc_url( home_url( '/tags' ) ); ?>">Tags</a></span>
            <?php else : ?>
            <span class="single_new_list"><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">News</a></span>
              <?php
            endif; ?>
            <span class="page-r">
              <?php next_post(' | % &raquo;','NEXT','no') ?>
            </span>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- new-single -->
    <?php set_post_views(get_the_ID()); ?>
  </div>
</main><!-- #main -->

<?php
get_footer();
