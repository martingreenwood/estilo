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
					<h2><?php echo $slider_image['title']; ?></h2>
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

			<div class="intro">
				<?php the_field('intro_content'); ?>
			</div>

			<div class="content">
				<?php the_content(); ?>
			</div>

			<?php if( have_rows('repeating_content') ): ?>
			<div class="location">
			<?php while ( have_rows('repeating_content') ) : the_row(); ?>

				<div class="block">
					<h2><?php the_sub_field('title'); ?></h2>
					<div class="blurb">
						<?php the_sub_field('content'); ?>
					</div>
				</div>

			<?php endwhile; ?>
			</div>
			<?php endif; ?>

		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
