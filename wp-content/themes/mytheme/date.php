<?php
get_header(); ?>
<div class="date-sec">
  <div class="container">
    <?php
    $date1 = get_query_var('date');

    // The Query
    $args = array(
      'paged' => $paged,
      'post_type' => 'post',
      'date' => $date1,
      'posts_per_page' => 10,
      'type' => 'yearly'
    );
    $the_query = new WP_Query($args);
    query_posts($args);
    echo '<ul>';

    // The Loop
    while (have_posts()) : the_post(); ?>
      <li>
        <?php the_time(get_option('date_format')); ?> <br />
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </li>
    <?php endwhile;

    // Reset Query
    wp_reset_query();
    echo '</ul>'; ?>
    <div id="pagination">
      <?php wp_pagenavi(array('query' => $the_query)); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>