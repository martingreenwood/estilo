<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package estilo
 */

?>

<section id="inspiration-content">
<?php
if( have_rows('inspiration_contant') ):
	// start the ounter so we can define odd-even rows
	$i = 0;
	while ( have_rows('inspiration_contant') ) : the_row(); 
	$i++;
	// even numbers
	if($i%2 == 0):
	?>
	<div class="row">

		<div class="content">

			<div class="inspire">
				<header>
					<h3>Inspiration</h3>
				</header>
				<div class="img">
					<?php $inspiration_image = get_sub_field('inspiration_image'); ?>
					<?php if( !empty($inspiration_image) ): ?>
					<img src="<?php echo $inspiration_image['url']; ?>" alt="<?php echo $inspiration_image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>

			<div class="copy">
				<h2><?php the_sub_field('heading'); ?></h2>
				<hr>
				<?php the_sub_field('text'); ?>
			</div>

		</div>

		<div class="feat-img">
			<?php $feature_image = get_sub_field('feature_image'); ?>
			<?php if( !empty($feature_image) ): ?>
			<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" />
			<?php endif; ?>
		</div>
	
	</div>
	<?php else: ?>
	<div class="row">

		<div class="feat-img">
			<?php $feature_image = get_sub_field('feature_image'); ?>
			<?php if( !empty($feature_image) ): ?>
			<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" />
			<?php endif; ?>
		</div>

		<div class="content">

			<div class="copy">
				<h2><?php the_sub_field('heading'); ?></h2>
				<hr>
				<?php the_sub_field('text'); ?>
			</div>

			<div class="inspire">
				<div class="img">
					<?php $inspiration_image = get_sub_field('inspiration_image'); ?>
					<?php if( !empty($inspiration_image) ): ?>
					<img src="<?php echo $inspiration_image['url']; ?>" alt="<?php echo $inspiration_image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<header>
					<h3>Inspiration</h3>
				</header>
			</div>

		</div>
	
	</div>

	<?php endif;

	endwhile;

else :

// no rows found

endif;

?>
</section>

<section id="inspiration-products">
	<div class="row">
	<?php
	if( have_rows('inspiration_products') ):
		// start the ounter so we can define odd-even rows
		$i = 0;
		while ( have_rows('inspiration_products') ) : the_row(); 
		$i++;
		// even numbers
		if($i%2 == 0):
		?>

		<div class="product">
			<div class="inspire">
				<div class="img">
				<?php
				$product = get_sub_field('product');
				if( $product ): 
				// override $post
				$post = $product;
				setup_postdata( $post ); 
					?>
					<div class="info">
						<?php echo woocommerce_get_product_thumbnail(); ?>

						<?php $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
						if ( $product_cats ){
							$single_cat = array_shift( $product_cats );
						}
						?>
						<h4 class="product_category_title"><span><?php echo $single_cat->name; ?></span></h4>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php //$price = get_post_meta( get_the_ID(), '_regular_price');  $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?>	
						<?php woocommerce_get_template( 'loop/price.php' ); ?>
					</div>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object ?>
				<?php endif; ?>
				</div>
				<header>
					<h3>In The Shop</h3>
				</header>
			</div>
		</div>	

		<?php else: ?>

		<div class="product">

			<div class="inspire">
				<header>
					<h3>In The Shop</h3>
				</header>
				<div class="img">
				<?php
				$product = get_sub_field('product');
				if( $product ): 
				// override $post
				$post = $product;
				setup_postdata( $post ); 
					?>
					<div class="info">
						<?php echo woocommerce_get_product_thumbnail(); ?>

						<?php $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
						if ( $product_cats ){
							$single_cat = array_shift( $product_cats );
						}
						?>
						<h4 class="product_category_title"><span><?php echo $single_cat->name; ?></span></h4>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php //$price = get_post_meta( get_the_ID(), '_regular_price');  $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?>	
						<?php woocommerce_get_template( 'loop/price.php' ); ?>
					</div>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object ?>
				<?php endif; ?>
				</div>
			</div>

		</div>
		

		<?php endif;

		endwhile;

	else :

	// no rows found

	endif;

	?>
	</div>
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content final">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
