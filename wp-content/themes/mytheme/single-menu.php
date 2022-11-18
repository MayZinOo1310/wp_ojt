<?php
get_header();

?>
<div class="common-mv">
  <h2>Delicious Food</h2>
</div>
<main id="primary" class="site-main menusingle-sec">
  <div class="container">
    <div class="menu-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="img-box">
            <?php the_post_thumbnail(''); ?>
          </div>
          <div class="post-content">
            <div class="ttl-content">
              <h3 class="post-ttl"><?php the_title(); ?></h3>
              <p class="price">MMK <?php the_field('price'); ?></p>
            </div>
            <p class="post-txt"><?php the_content(); ?></p>
            <div class="txt-content d-flex">
              <div class="field-box">
                <?php $field = get_field_object('topping'); ?>
                <h3><?php echo $field['label']; ?></h3>
                <ul><?php echo $field['value']; ?></ul>
              </div>
              <?php if (has_term('pizza', 'menu_type')) : ?>
                <div class="field-box">
                  <?php $field = get_field_object('available_pizza_size'); ?>
                  <h3><?php echo $field['label']; ?></h3>
                  <ul><?php echo $field['value']; ?></ul>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- menu-single -->

    <h3 class="related-ttl"><span>Similar Items</span><span class="border"></span></h3>
    <?php
    //get the taxonomy terms of custom post type
    $taxTerms = wp_get_object_terms($post->ID, 'menu_type', array('fields' => 'ids'));

    //query arguments
    $args = array(
      'post_type' => 'menu',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'menu_type',
          'field' => 'id',
          'terms' => $taxTerms
        )
      ),
      'post__not_in' => array($post->ID),
    );

    //the query
    $relatedPosts = new WP_Query($args);

    //loop through query
    if ($relatedPosts->have_posts()) {
      echo '<ul class="menu-list">';
      while ($relatedPosts->have_posts()) {
        $relatedPosts->the_post();
    ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(''); ?>
            <span class="post-ttl"><?php the_title(); ?></span>
          </a>
        </li>
    <?php
      }
      echo '</ul>';
    } else {
      echo "no posts found";
    }

    ?>
  </div>
</main><!-- #main -->

<?php
get_footer();
