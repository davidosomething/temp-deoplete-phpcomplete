<div class="mobile-feat-img-wrapper wp-caption">
	<?php
	// Mobile featured image settings
	$size         = 'wide-large';
	$default_attr = array( 'class' => "attachment-$size in-post-feat-img large-12" );
	the_post_thumbnail( $size, $default_attr );
	NDA\Media::the_featured_image_caption( $post->ID, 'mobile' );
	?>
</div>

<div class="feat-img-wrapper wp-caption">
	<div class="featured-image__item" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
		<?php
		$size         = 'wide-full';
		$default_attr = array( 'class' => "attachment-$size in-post-feat-img large-12" );
		the_post_thumbnail( $size, $default_attr );
		NDA\Media::the_featured_image_caption( $post->ID );
		?>
	</div>
</div>
