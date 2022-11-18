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
    <li class="tab-link current" data-tab="all"><button>all</button>
      <?php $terms = get_terms(
        array(
          'taxonomy'   => 'menu_type',
          'hide_empty' => false,
        )
      );

      // Check if any term exists
      if (!empty($terms) && is_array($terms)) {
        // Run a loop and print them all
        foreach ($terms as $term) { ?>
          <li class="tab-link <?php echo $term->slug; ?>" data-tab="<?php echo $term->slug; ?>">
            <button>
              <?php echo $term->name; ?>
            </button>
          </li>
    <?php
        }
      }
    echo '</ul>' ?>
    <?php
    // Get All Post 
    $args = array(
      'post_type' => 'menu',
      'posts_per_page' => -1,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
      <ul class="menu-list tab-content current" id="all">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(''); ?>
              <span class="post-ttl"><?php the_title(); ?></span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <?php
    // Get all the taxonomies for this post type
    $taxonomies = get_object_taxonomies((object) array('post_type' => 'menu'));
    foreach ($taxonomies as $taxonomy) :

      // Gets every "category" (term) in this taxonomy to get the respective posts
      $terms = get_terms($taxonomy);
      foreach ($terms as $term) :

        $posts = new WP_Query("taxonomy=$taxonomy&term=$term->slug&posts_per_page=-1&orderby=id&order=DESC");

        if ($posts->have_posts()) : ?>
          <ul class="menu-list tab-content" id="<?php echo $term->slug; ?>">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(''); ?>
                  <span class="post-ttl"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
    <?php endif;
      endforeach;
    endforeach;
    ?>
  </div>
</div><!-- /.menu-sec -->
<?php get_footer(); ?>