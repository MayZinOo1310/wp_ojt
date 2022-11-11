<?php
/*
	Template Name:menu
*/
get_header(); ?>
<div class="common-mv">
  <h2>Delicious Food</h2>
</div>
<div class="menu-sec">
  <div class="container">
    <?php
    echo '<ul class="menu-tabs">'; ?>
    <!-- <li class="tab-link current" data-tab="all"><button>all</button> -->
    <?php $terms = get_terms(
      array(
        'taxonomy'   => 'menu_category',
        'hide_empty' => false,
      )
    );

    // Check if any term exists
    if (!empty($terms) && is_array($terms)) {
      // Run a loop and print them all
      foreach ($terms as $term) { ?>
        <li class="tab-link <?php echo $term->slug; ?>" data-tab="<?php echo $term->name; ?>">
          <button>
            <?php echo $term->name; ?>
          </button>
        </li><?php
            }
          }
          echo '</ul>' ?>
    <ul class="menu-list tab-content current" id="<?php echo $term->slug; ?>">
      <?php
      $args = array('post_type' => 'menu', 'posts_per_page' => 10);
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class=""><?php the_post_thumbnail(''); ?></div>
              <span class="post-ttl"><?php the_title(); ?></span>
            </a>
          </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else :  ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </ul>
  </div>
</div><!-- /.menu-sec -->
<?php get_footer(); ?>