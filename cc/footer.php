<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

    <div class="site-footer-wrapper">
  		<footer id="colophon" class="site-footer sticky-nav-main" role="contentinfo">

        <div class="cc-footer">
          <div class="column cc-footer-main">
            <div class="cc-footer-logo">
              <?php twentysixteen_the_custom_logo(); ?>
            </div>

            <div class="cc-footer-links">
              <?php
                if ( has_nav_menu( 'footer-links' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
                  wp_nav_menu( array( 'theme_location' => 'footer-links') );
                }
              ?>
              <div class="cc-footer-links-search">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>

          <div class="column cc-footer-contact">
            <h6><a href="/about/contact">We'd love to hear from you!</a></h6>

            <address>
              Creative Commons<br />
              PO Box 1866, Mountain View, CA 94042
            </address>

            <ul>
              <li><a href="mailto:info@creativecommons.org" class="mail">info@creativecommons.org</a></li>
              <li><a href="tel:1-415-429-6753">1-415-429-6753</a></li>
              <li><a style="color: white" href="/faq">Frequently Asked Questions</a></li>
            </ul>
          </div>

          <div class="column cc-footer-license">
            <div class="license-icons">
              <a rel="license" href="https://creativecommons.org/licenses/by/4.0/" title="Creative Commons Attribution 4.0 International license">
                <?php /* <img src="https://licensebuttons.net/l/by/4.0/88x31.png" alt="License"> */ ?>
                <i class="cc-icon-cc"></i><i class="cc-icon-cc-by"></i>
              </a>
            </div>
            <aside>
              <div xmlns:cc="https://creativecommons.org/ns#" about="https://creativecommons.org">
                <p>Except where otherwise <a class="subfoot" href="/policies#license">noted</a>, content on this site is licensed under a <a class="subfoot" href="https://creativecommons.org/licenses/by/4.0/" rel="license">Creative Commons Attribution 4.0 International license</a>. <a class="subfoot" href="/website-icons" target="blank">Icons</a> by The Noun Project.</p>
                <?php if ( is_front_page() ) {	?>
                <p class="website-credit">Website by <a class="subfoot" href="http://affinitybridge.com/" target="blank"> Affinity Bridge</a>.</p>
                <?php } ?>

              </div>
            </aside>
          </div>

          <div class="column cc-footer-search">
            <?php get_search_form(); ?>
          </div>
        </div>

  		</footer><!-- .site-footer -->
    </div><!-- .site-footer-wrapper -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
