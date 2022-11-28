<div class="post-thumbnail">
  <?php if( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a>
  <?php else: ?>
    <a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/no_image.png" ></a>
  <?php endif; ?>
</div><!-- post-thumbnail -->