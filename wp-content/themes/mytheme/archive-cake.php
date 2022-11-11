<?php
/*
	Template Name:cake
*/
get_header(); ?>
<div class="common-mv">
  <h2>Cake</h2>
</div>
<div class="cake-sec">
  <div class="container">
    <ul class="cake-list">
      <?php
      $args = array('paged' => get_query_var('paged'), 'post_type' => 'cake', 'posts_per_page' => 12);
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class=""><?php the_post_thumbnail(''); ?></div>
            </a>
            <h3 class="post-ttl"><?php the_title(); ?></h3>
            <p class="post-txt"><?php the_content(); ?></p>
          </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else :  ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </ul>
    <div id="pagination">
			<?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
		</div>
  </div>
</div><!-- /.cake-sec -->
<?php get_footer(); ?>