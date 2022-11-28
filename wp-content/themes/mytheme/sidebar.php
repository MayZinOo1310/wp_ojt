<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>

<aside id="secondary" class="widget-area">
  <?php
  if (is_category()) {
    $this_category = get_category($cat);
  }
  ?>
  <h2>Category</h2>
  <?php
  if ($this_category->category_parent)
    $this_category = wp_list_categories('orderby=id
      &title_li=&use_desc_for_title=1&child_of=' . $this_category->category_parent .
      "&echo=0");
  else
    $this_category = wp_list_categories('orderby=id&depth=1
      &title_li=&use_desc_for_title=1&child_of=' . $this_category->cat_ID .
      "&echo=0");
  if ($this_category) { ?>

    <ul>
      <?php echo $this_category; ?>
    </ul>
  <?php } ?>
  <div class="latest-post">
    <h2>New Posts</h2>
    <ul class="content-gp">
      <?php
      $args = array('posts_per_page' => 3);
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="content-box link">
              <div class="col-2box">
                <p class="cat-name"><?php $cat = get_the_category();
                  echo $cat[0]->cat_name; ?>
                </p>
                <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
              </div>
              <p class="post-ttl"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php wp_reset_query();
      endif; ?>
    </ul>
  </div><!-- /.latest-post -->
  <ul class="ranking-post">
    <h2>Ranking Post</h2>
    <?php
    $popular = new WP_Query(array(
      'posts_per_page'   => 3,
      'meta_key'         => 'post_views_count', //count posts
      'orderby'          => 'meta_value_num',
      'order'            => 'DESC',
      'post_status'      => 'publish',
      'caller_get_posts' => 1,
      'offset'           => 0,
      'category__not_in' => array(3), //remove a specific category
    ));
    while ($popular->have_posts()) : $popular->the_post();
    ?>
      <li class="rank-list">
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
          <?php if (has_category()) { ?>
            <div class="col-2box">
              <p class="cat-name"><?php $cat = get_the_category();
                echo $cat[0]->cat_name; ?>
              </p>
              <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
            </div>
            <p class="post-ttl"><?php the_title(); ?></p>
          <?php } ?>
        </a>
      </li>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </ul><!-- /.ranking-post -->
  
  <?php
    if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <div id="widget-area" class="chw-widget-area widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php endif; ?>
</aside><!-- #secondary -->