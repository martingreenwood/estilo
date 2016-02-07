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

	<?php $slider_images = get_field('slider_images'); if( $slider_images ): ?>
	<div id="slider">
		<ul class="slides">
		<?php foreach( $slider_images as $slider_image ): ?>
			<li>
				<img src="<?php echo $slider_image['sizes']['slide']; ?>" alt="<?php echo $slider_image['title']; ?>" />
				<div class="caption">
					<h2><?php echo $slider_image['caption']; ?></h2>
				</div>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>

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
