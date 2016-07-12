<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php if(is_shop()): ?>
	<div class="intro">
		<?php 
		$pageID = get_id_by_slug('shop');
		$shopPage = get_page( $pageID );

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageID ), 'square' ); ?>
		<div class="img">
			<img src="<?php echo $image[0]; ?>">
		</div>

		<div class="text">
			<h1><?php the_field('page_heading', $pageID); ?></h1>
			<hr>
			<?php
			$content = $shopPage->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content; ?>
		</div>
	</div>
	<?php endif; ?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

	<div id="secondary" class="widget-area" role="complementary">
		<aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories">
			<ul class="product-categories clear">

			<?php
			$args = array( 'taxonomy' => 'product_cat' );
			$terms = get_terms('product_cat', $args);
			if (count($terms) > 0): ?>
			<?php foreach ($terms as $term): ?>
				<li class="cat-item cat-item-<?php echo $term->term_id; ?>">
					<a href="<?php echo get_category_link($term->term_id); ?>" title="View More <?php echo $term->name; ?>"> <?php echo $term->name; ?></a>
					<p><?php echo $term->description; ?></p>
				</li>
			<?php endforeach; ?>
		    	
			<?php endif; ?>

			</ul>
		</aside>
	</div>

	<h2 class="product_category_title"><?php echo single_cat_title(); ?></h2>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			//do_action( 'woocommerce_archive_description' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
				remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
