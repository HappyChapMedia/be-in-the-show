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
					<p class="date"><strong>January 29th</strong></p>
					<p class="tagline"><small>A community </small><strong>talent show</strong><br><small class="salt">&amp;</small> <strong class="dance-showcase">dance showcase</strong></p>
				</div>
				<div class="footer-nav large-3 columns">
					<?php wp_nav_menu( array('main' => 'main' )); ?>
				</div>
				<div class="tds large-3 columns">
					<p>Presented by: <br> <a href="http://www.thedancestudio.net" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dance-studio-logo-horiz.png" alt="The Dance Studio"></a></p>
				</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

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
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
