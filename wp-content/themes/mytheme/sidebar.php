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
      if($this_category->category_parent)
      $this_category = wp_list_categories('orderby=id
      &title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
      "&echo=0"); else
      $this_category = wp_list_categories('orderby=id&depth=1
      &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
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
                                      echo $cat[0]->cat_name; ?></p>
                  <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                </div>
                <p class="post-ttl"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php wp_reset_query();
        endif; ?>
      </ul>
  </div>
</aside><!-- #secondary -->