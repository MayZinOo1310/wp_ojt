<?php
/*
	Template Name: news
*/
get_header();

?>
<div class="common-mv">
    <h2>News</h2>
</div>
<div class="category-sec new-post post-common">
    <div class="d-flex container">
        <div class="main">
            <div class="category-gp">
                <ul class="content-gp">
                    <?php if (is_category('notice')) : ?>
                    <?php query_posts('category_name=notice&posts_per_page=3&paged='.$paged); ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="content-box link">
                            <div class="img-box">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="txt-box">
                                <div class="col-2box">
                                    <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                                    <p class="cat-name"><?php $cat = get_the_category();
                                            echo $cat[0]->cat_name; ?></p>
                                </div>
                                <p class="post-ttl"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query();endif; ?>
                    <?php elseif (is_category('media')) : ?>
                    <?php query_posts('category_name=media&posts_per_page=2&paged='.$paged); ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="content-box link">
                            <div class="img-box">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="txt-box">
                                <div class="col-2box">
                                    <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                                    <p class="cat-name"><?php $cat = get_the_category();
                                            echo $cat[0]->cat_name; ?></p>
                                </div>
                                <p class="post-ttl"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query();endif; ?>
                    <?php elseif (is_category('event')) : ?>
                    <?php query_posts('category_name=event&posts_per_page=2&paged='.$paged); ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="content-box link">
                            <div class="img-box">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="txt-box">
                                <div class="col-2box">
                                    <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                                    <p class="cat-name"><?php $cat = get_the_category();
                                            echo $cat[0]->cat_name; ?></p>
                                </div>
                                <p class="post-ttl"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query();endif; ?>
                    <?php elseif (is_category('shinsaku')) : ?>
                    <?php query_posts('category_name=shinsaku&posts_per_page=2&paged='.$paged); ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="content-box link">
                            <div class="img-box">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="txt-box">
                                <div class="col-2box">
                                    <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                                    <p class="cat-name"><?php $cat = get_the_category();
                                            echo $cat[0]->cat_name; ?></p>
                                </div>
                                <p class="post-ttl"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query();endif; ?>
                    <?php else : ?>
                    <?php query_posts('category_name=news&posts_per_page=3&paged='.$paged); ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="content-box link">
                            <div class="img-box">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="txt-box">
                                <div class="col-2box">
                                    <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                                    <p class="cat-name"><?php $cat = get_the_category();
                                            echo $cat[0]->cat_name; ?></p>
                                </div>
                                <p class="post-ttl"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query();endif; ?>
                    <?php endif; ?>
                </ul>
            </div><!-- .new-post -->
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>