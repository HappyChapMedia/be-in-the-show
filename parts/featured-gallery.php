	<div class="featured-gallery" >
	<?php $images = get_field('gallery-image',  $_GET['page_id']); if( $images ): ?> 
		<?php foreach( $images as $image ): ?>
			<figure class="gallery-image" data-interchange="[<?php echo $image['sizes']['fp-small']; ?>, small], [<?php echo $image['sizes']['fp-medium']; ?>, medium], [<?php echo $image['sizes']['fp-large']; ?>, large], [<?php echo $image['sizes']['fp-xlarge']; ?>, xlarge]">
			</figure>
		<?php endforeach; ?>
	<?php else : ?>
		<figure class="gallery-image" >
		</figure>
	<?php endif; ?>
	</div>