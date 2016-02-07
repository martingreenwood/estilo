<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estilo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<div class="copy">
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.</p>
				<p>2015 © ESTILO. All rights reserved</p>
			</div>

			<div class="footer-logo">
			<?php if ( get_field('custom_logo', 'option') ): ?>
				<div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php the_field('custom_logo', 'option') ?>" width="170" height="170">
					</a>
				</div>
			<?php endif; ?>
			</div>

		</div><!-- .site-info -->

		<div id="credit">
			<p>Designed by <a href="http://www.carneand.co.uk">Carne &amp; Co</a> built by <a href="http://pixelpudu.com">Pixel Pudu</a></p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
