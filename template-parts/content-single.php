<?php
/**
 * Template part for displaying single posts.
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
			<div class="entry-meta">
			<?php estilo_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php the_content(); ?>
		</div>
	</div>
