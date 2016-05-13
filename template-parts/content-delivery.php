<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package estilo
 */

?>

	<div class="intro">
		<?php 

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'square' ); ?>
		<div class="img">
			<img src="<?php echo $image[0]; ?>">
		</div>

		<div class="text">
			<h1><?php the_title(); ?></h1>
			<hr>
			<?php the_content(); ?>
		</div>
	</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="column">
		<?php the_field('column_one'); ?>
	</div>
	<div class="column">
		<?php the_field('column_two'); ?>
	</div>
</article><!-- #post-## -->
