<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<div class="footer-branding large-3 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/be-in-the-show-logo-footer.png" alt="Be in the Show"></a>
					<p class="date"><strong>January 21st</strong></p>
					<p class="tagline"><small>A community </small><strong>talent showcase</strong></p>
				</div>
				<div class="footer-nav large-3 columns">
					<?php wp_nav_menu( array('main' => 'main' )); ?>
				</div>
				<div class="benefiting large-4 columns">
					<div class="sylvia">
						<p>Proceeds benefiting: <br> <a href="http://sylviacenterforthearts.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sylvia-center-logo.jpg" alt="Sylvia Center for the Arts"></a></p>
					</div>
					<div class="tds">
						<p>Produced by: <br> <a href="http://www.thedancestudio.net" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dance-studio-logo-horiz.png" alt="The Dance Studio"></a></p>
					</div>
				</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
			<div class="footer-credits-contain">
				<div class="footer-credits">
					<div class="photo-credits medium-8 columns">
						<p><i class="fa fa-camera"></i> Photos via Flickr &ndash; <a href="https://www.flickr.com/photos/evarinaldiphotography/" target="_blank">Eva Rinaldi</a>, <a href="https://www.flickr.com/photos/walterpro/" target="_blank">Walter</a>, <a href="https://www.flickr.com/photos/jus10h/" target="_blank">Justin Higuchi</a> <span class="salt">&amp;</span> <a href="https://www.flickr.com/photos/familymwr/" target="_blank">U.S. Army</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('parts/hc-colophon') ?>
	
		<?php do_action( 'foundationpress_layout_end' ); ?>
	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<!-- Close off-canvas content wrapper -->
	</div>
	<?php endif; ?>
	
	<?php endif; ?>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36854053-2', 'auto');
  ga('send', 'pageview');

</script>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
