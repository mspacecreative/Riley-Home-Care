<div class="slick-bg">
	<?php $loop = new WP_Query( array( 'post_type' => 'services_slider', 'order' => 'ASC' ) );
			if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<div style="background: url(<?php echo $backgroundImg[0] ?>);" class="timeline-bg"></div>
					<?php endwhile;
			endif; 
	wp_reset_postdata(); ?>
</div>