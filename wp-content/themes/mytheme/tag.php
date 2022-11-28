<?php
/*
	Template Name: tags
*/
get_header();

?>
<div class="common-mv">
  <h2><?php echo get_the_title(); ?></h2>
</div>
<div class="category-sec tag post-common">
  <div class="container">
    <div class="main">
    <div class="category-gp">
        <ul class="content-gp">
      <?php 
        $args = array(
        'posts_per_page'    => -1,
        'orderby'           => 'name',
        'order'             => 'ASC',
        'post_type'         => 'post',
        );

        $tags = get_tags($args); // show tags
        $posts = get_posts($args);

        foreach($tags as $tag)
        {
          ?>
            <h5><?php echo $tag->name.' (Tag)'; ?></h5>
          <?php
          foreach($posts as $post)
          {
            if( has_tag( $tag ) )
            {
            ?>
            <li>
              <a href="<?php echo the_permalink();?>">
                <div class="img-box">
                      <?php the_post_thumbnail(''); ?>
                    </div>
                    <div class="txt-box">
                      <div class="col-2box">
                        <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                      </div>
                      <p class="post-ttl"><?php the_title(); ?></p>
                    </div>
              </a>
            </li>
            <?php
            }
          }
          ?>
          <hr>
          <?php
        }
      ?>
      </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
