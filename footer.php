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
				<p><?php the_field('footer_text', 'option'); ?></p>
				<p><?php echo date('Y'); ?> © ESTILO. All rights reserved</p>
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
			<p>Design and build / <a target="_blank" href="http://www.carneand.co.uk">Carne &amp; Co</a></p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
