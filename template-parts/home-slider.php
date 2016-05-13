	<?php $slider_images = get_field('slider_images'); if( $slider_images ): ?>
	<div id="slider">
		<div class="slides">
		<?php foreach( $slider_images as $slider_image ): ?>
			<div class="slide">
				<a href="<?php the_field('attacment_url', $slider_image['ID']); ?>">
					<img src="<?php echo $slider_image['sizes']['slide']; ?>" alt="<?php echo $slider_image['title']; ?>" />
					<div class="caption">
						<h2><?php echo $slider_image['caption']; ?></h2>
						<p><?php echo $slider_image['description']; ?></p>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
