<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package estilo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/home', 'slider' ); ?>

	<div class="entry-content">

		<header>
			<h1><?php the_field('page_heading'); ?></h1>
		</header>

		<div class="copy">
			<div class="column">
				<?php the_content(); ?>
			</div>
			<div class="column">
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
