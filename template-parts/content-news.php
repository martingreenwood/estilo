<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package estilo
 */

?>

<section id="news-intro">

	<div class="row">

		<div class="img">
			<?php the_post_thumbnail('full'); ?>
		</div>

		<div class="tweet">
			<div class="helper">
			<?php if ( is_active_sidebar( 'tweets' ) ) : ?>
				<div id="tweets" class="tweets-sidebar widget-area" role="complementary">
					<i class="fa fa-twitter"></i>
					<?php dynamic_sidebar( 'tweets' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</div>	
		</div>
		
	</div>
	
</section>

<section id="news-stories">
<?php
	$args = array('post_type' => 'post', 'posts_per_page'  => 5, 'post_status' => 'publish');
	$loop = new WP_Query($args);
	$i = 0;
	if($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); $i++; ?>
	
	<?php if($i%2 == 0): ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
		
			<div class="img">
				<?php $secondary_image = get_field('secondary_image');
				if( !empty($secondary_image) ):
					echo wp_get_attachment_image( $secondary_image['id'], 'full' );
				endif; ?>
			</div>

			<div class="copy left">

				<div class="image">
				<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
				</div>

				<div class="blurb">
					<h1>
						<a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a>
					</h1>
					<?php the_excerpt(); ?>
				</div>

			</div>

		
		</div><!-- .entry-content -->

	</article><!-- #post-## -->

	<?php else: ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
		
			<div class="copy">

				<div class="image">
				<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
				</div>

				<div class="blurb">
					<h1>
						<a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a>
					</h1>
					<?php the_excerpt(); ?>
				</div>

			</div>

			<div class="img">
				<?php $secondary_image = get_field('secondary_image');
				if( !empty($secondary_image) ):
					echo wp_get_attachment_image( $secondary_image['id'], 'full' );
				endif; ?>
			</div>

		
		</div><!-- .entry-content -->

	</article><!-- #post-## -->

	<?php endif; ?>

	<?php
	endwhile;
	endif;
	wp_reset_query();
?>
</section>