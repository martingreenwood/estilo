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
				<?php the_content(); ?>
			</div>

			<div class="content">
				<div class="feature">

					<?php if( have_rows('feature_range') ): ?>
					<?php while ( have_rows('feature_range') ) : the_row(); ?>

					<div class="range">

						<div class="intro">
							<h2><?php the_sub_field('fr_title'); ?></h2>
							<hr>
							<p><?php the_sub_field('fr_intro'); ?></p>
							<p class="cta"><strong><?php the_sub_field('fr_cta'); ?></strong></p>
						</div>

						<div class="products">

							<div class="product">
							<?php
							$fr_product_one = get_sub_field('fr_product_one');
							if( $fr_product_one ): 
							// override $post
							$post = $fr_product_one;
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

							<div class="product">
							<?php
							$fr_product_two = get_sub_field('fr_product_two');
							if( $fr_product_two ): 
							// override $post
							$post = $fr_product_two;
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

					<div class="img">
					<?php $big_img = get_sub_field('fr_image'); ?>
					<?php if( !empty($big_img) ): ?>
						<img src="<?php echo $big_img['url']; ?>" alt="<?php echo $big_img['alt']; ?>" />
					<?php endif; ?>
					</div>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<div class="copy source-copy">

			<div class="content">

				<div class="source">

					<?php if( have_rows('sourcing') ): ?>
					<?php while ( have_rows('sourcing') ) : the_row(); ?>

					<div class="img">
					<?php $big_img = get_sub_field('fr_image'); ?>
					<?php if( !empty($big_img) ): ?>
						<img src="<?php echo $big_img['url']; ?>" alt="<?php echo $big_img['alt']; ?>" />

						<div class="overlay"></div>
						<?php if(get_sub_field('fr_video')): ?>
						<div class="video">
							<?php the_sub_field('fr_video'); ?>
						</div>
						<?php endif; ?>
					<?php endif; ?>
					</div>

					<div class="range">

						<div class="intro">
							<h2><?php the_sub_field('fr_title'); ?></h2>
							<hr>
							<p><?php the_sub_field('fr_intro'); ?></p>
							<p class="cta"><strong><?php the_sub_field('fr_cta'); ?></strong></p>
						</div>

						<div class="products">

							<div class="product">
							<?php
							$fr_product_one = get_sub_field('fr_product_one');
							if( $fr_product_one ): 
							// override $post
							$post = $fr_product_one;
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

							<div class="product">
							<?php
							$fr_product_two = get_sub_field('fr_product_two');
							if( $fr_product_two ): 
							// override $post
							$post = $fr_product_two;
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
					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
