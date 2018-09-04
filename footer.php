<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <!--<div class="footer-container">-->

      <div class="marketing-site-footer">
        <div class="footer-container medium-unstack grid-x">
          <div class="medium-4 columns">
            <h4 class="marketing-site-footer-name">MSA</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem accusantium architecto id quidem, itaque nesciunt quam ducimus atque.</p>
            <ul class="menu marketing-site-footer-menu-social simple">
              <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="medium-4 columns">
             <h4 class="marketing-site-footer-title">Contact Info</h4>
            <div class="marketing-site-footer-block">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>100 W Rincon<br>San Francisco, CA 94015</p>
            </div>
            <div class="marketing-site-footer-block">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <p>1 (800) 555-5555</p>
            </div>
            <div class="marketing-site-footer-block">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <p>yetirules@fakeemail.com</p>
            </div>
          </div>
          <div class="medium-4 columns">
            <h4 class="marketing-site-footer-title">Instagram</h4>
            <div class="grid-x small-up-3">
              <div class="cell column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
              <div class="cell column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
              <div class="cell column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
              <div class="cell column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
              <div class="cell column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
              <div class="column column-block">
                <img src="https://placehold.it/75" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="marketing-site-footer-bottom ">
          <div class="grid-container grid-x large-unstack align-middle">
            <div class="cell medium-6">
              <p>&copy; 2017 No rights reserved</p>
            </div>
            <div class="cell medium-6">
              <ul class="menu marketing-site-footer-bottom-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Works</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

        <?php if (dynamic_sidebar( 'footer-widgets' )) { ?>
          <div class="footer-grid">
              <?php dynamic_sidebar( 'footer-widgets' ); ?>
          </div>
        <?php } ?>

      </div>




    <!--</div>-->
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

<script>
$(function() {
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 80) {
      $("body").addClass("sticky-shrinknav-wrapper");
    } else{
      $("body").removeClass("sticky-shrinknav-wrapper");
    }
  });
});


</script>

</body>
</html>
