<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="fw-container">
				<div class="footer-signup">
					<?php do_action( 'site_signup_newsletter_button' ); ?>
				</div>
				<div class="footer-social">
					<?php do_action( 'site_socials_icons_list' ); ?>
				</div>

				<div class="site-info">
					<?php do_action( 'site_copyright' ); ?>
				</div><!-- .site-info -->
			</div>

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
