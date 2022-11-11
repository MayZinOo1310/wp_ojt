<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>

<footer id="colophon" class="site-footer footer">
  <!-- <div class="footer"> -->
  <div class="container">
    <div class="footer-menu">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-2',
          'menu_id'        => 'footer-menu',
        )
      );
      ?>
    </div>
    <div class="footer-gp">
      <div class="footer-box">
        <h3>Address</h3>
        <p>No.(58), U Htun Linn Chan Street, Hledan,<br> Kamayut Township, Yangon</p>
      </div>
      <div class="footer-box">
        <h3>Opening Hours</h3>
        <p>Open Daily <br> 9:00 Am To 20:00 Pmn</p>
      </div>
      <div class="footer-box">
        <h3>Contact Us</h3>
        <p>
          <a href="tel:09456852159">(+95) 9 456 852 159</a><br>
          <a href="tel:09496362759">(+95) 9 496 362 75</a>9
        </p>
      </div>
    </div>
  </div>
  <div class="footer-bar">
    <div class="container">
      <p>
        <span>Copyright &copy; 2022 Company Name. </span>
        <span>All rights reserved | Web Design by <a href="https://seattleconsultingmyanmar.com/" target="_blank">SCM</a></span>
      <p>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>