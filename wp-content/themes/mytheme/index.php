<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 */

get_header();
?>
<div class="mv-sec">
  <div class="container">
    <div class="mv-gp">
      <div class="mv-box">
        <h2>
          <span class="txt-common">Welcome </span>
          Good Food Brings<br>
          Genuine <span class="txt-red">Happiness</span>
        </h2>
        <p>Lorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a 1st-century BC text
          by the Roman statesman.</p>
        <div class="mv-btn">
          <div class="btn-order"><a href="<?php echo esc_url(home_url('/')); ?>">Order Now</a></div>
          <div class="btn-menu"><a href="<?php echo esc_url(home_url('/')); ?>">See Menu</a></div>
        </div>
        <ul class="mv-list">
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_01.png" alt="">
            <h3>Delivery</h3>
            <p>Lorem ipsum is typically a corrupted version.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_02.png" alt="">
            <h3>Pick Up</h3>
            <p>Lorem ipsum is typically a corrupted version.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_03.png" alt="">
            <h3>Dine in</h3>
            <p>Lorem ipsum is typically a corrupted version.</p>
          </li>
        </ul>
      </div>
      <div class="mv-box">
        <ul class="btn-list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_dishe.png" alt="">Dishes</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_dishe.png" alt="">Pizza</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_dishe.png" alt="">Burgers</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_dishe.png" alt="">Fried
              Chicken</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_dishe.png" alt="">Drinks</a></li>
        </ul>
      </div>
      <div class="mv-img">
        <div class="img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/mv_img.png" alt="">
          <div class="price-gp">
            <p>Salmon Greek Salad</p>
            <p class="price">MMK 9,800</p>
          </div>
        </div>
      </div>
    </div>
    <div class="mv-scroll">
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/mv_scroll.png" alt=""></a>
    </div>
  </div>
</div><!-- .mv-sec -->
<main id="primary" class="site-main">
  <div class="story-sec">
    <div class="container">
      <h2>
        <span class="txt-common">Our Story</span>
        Welcome To <span class="txt-red">SCM</span>
      </h2>
      <p class="story-txt">
        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
        this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
        with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
        generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic
        words etc.
      </p>
      <div class="btn">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">More Our Story</a>
      </div>
      <div class="story-address">
        <div class="address-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_address_01.png" alt=""></div>
        <div class="address-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_address_02.png" alt=""></div>
        <div class="address-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_address_03.png" alt=""></div>
      </div>
    </div>
  </div><!-- .story-sec -->
  <div class="popular-sec">
    <div class="container">
      <div class="popular-gp">
        <div class="popular-box">
          <h2>
            <span class="txt-common">See what we offer</span>
            Popular Menus
          </h2>
          <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
            structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <div class="btn">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">View All Menu</a>
          </div>
        </div>
        <div class="popular-box popular-imgbox">
          <div class="img-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_food_01.png" alt=""></div>
          <div class="img-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_food_02.png" alt=""></div>
          <div class="img-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_food_03.png" alt=""></div>
          <div class="img-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_food_04.png" alt=""></div>
        </div>
      </div>
    </div>
  </div><!-- .popular-sec -->
  <div class="service-sec">
    <div class="container">
      <div class="service-gp">
        <div class="service-box">
          <div class="box">
            <h3>Special Event Catring</h3>
            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
              making this the first true generator on the Internet. </p>
          </div>
          <div class="box">
            <h3>Birthday Discount</h3>
            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
              making this the first true generator on the Internet. </p>
          </div>
        </div>
        <div class="service-box box-01">
          <div class="box-gp">
            <h2>
              <span class="txt-common">Choose One</span>
              Our Services
            </h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
              suffered alteration in some form, by injected humour, or randomised words which don't look
              even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
              sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
        </div>
        <div class="service-box box-02">
          <div class="box">
            <h3>24/7 Customer Service</h3>
            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
              making this the first true generator on the Internet. </p>
          </div>
          <div class="box">
            <h3>Easy Delivery</h3>
            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
              making this the first true generator on the Internet. </p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .service-sec -->
  <div class="branch-sec">
    <div class="container">
      <h2>
        <span class="txt-common">Find Us in Everywhere</span>
        Our Branches
      </h2>
      <div class="branch-gp">
        <div class="swiper-container branch-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_01.png" alt="">
            </div>
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_02.png" alt="">
            </div>
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_03.png" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

        <div class="swiper-container branch-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_01.png" alt="">
            </div>
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_02.png" alt="">
            </div>
            <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_branch_03.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .branch-sec -->
  <div class="new-post post-common">
    <div class="container">
      <h2>News</h2>
      <ul class="content-gp">
        <?php
        $args = array('category_name' => 'news', 'posts_per_page' => 4);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="content-box link">
                <?php the_post_thumbnail(''); ?>
                <div class="col-2box">
                  <p class="newsdate"><?php echo get_the_date("Y-m-d"); ?></p>
                  <p class="cat-name"><?php $cat = get_the_category();
                                      echo $cat[0]->cat_name; ?></p>
                </div>
                <p class="post-ttl"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php wp_reset_query();
        endif; ?>
      </ul>
      <div class="btn"><a href="<?php echo esc_url(get_category_link(get_cat_ID('news'))); ?>">News</a></div>
    </div>
  </div><!-- .new-post -->
  <div class="cake-post post-common">
    <div class="container">
      <h2>Cake Post Type</h2>
      <ul class="content-gp">
        <?php
        $args = array('post_type' => 'cake', 'posts_per_page' => 4);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="content-box link">
                <?php the_post_thumbnail(''); ?>
                <p class="post-ttl"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php wp_reset_query();
        endif; ?>
      </ul>
      <div class="btn"><a href="<?php echo esc_url(home_url('/cake')); ?>">Cake</a></div>
    </div>
  </div><!-- .cake-sec -->
</main><!-- #main -->
<?php
get_footer();
