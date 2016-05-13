<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package estilo
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

	<?php $image = get_field('404_image'); ?>
	<div id="slider">
		<ul class="slides">
			<li>
				<img src="<?php echo $image['url'] ?>" />
			</li>
		</ul>
	</div>

	<div class="entry-content">

		<header>
			<h1><?php the_field('404_heading'); ?></h1>
		</header>

		<div class="copy">

			<div class="content">
				<h1><?php the_field('404_text'); ?></h1>
			</div>

		</div>

	</div><!-- .entry-content -->

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
