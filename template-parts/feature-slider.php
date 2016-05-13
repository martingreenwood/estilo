	<?php $slider_images = get_field('slider_images'); if( $slider_images ): ?>
	<div id="slider">
		<div class="slides">
		<?php foreach( $slider_images as $slider_image ): ?>
			<div class="slide">
				<img src="<?php echo $slider_image['sizes']['slide']; ?>" alt="<?php echo $slider_image['title']; ?>" />
				<div class="caption">
					<?php if ($slider_image['title']): ?>
					<h2><?php echo $slider_image['title']; ?></h2>
					<?php else: ?>
					<h2><?php echo $slider_image['caption']; ?></h2>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
