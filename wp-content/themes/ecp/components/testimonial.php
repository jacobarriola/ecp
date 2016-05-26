<?php

  if ( is_front_page() ) {
    $location = 'home';
    $column_class = 'large-8';
  } else {
    $location = 'site';
    $column_class = '';
  }

	// Fetch a random testimonial
	$args = array(
		'post_type' 			=> 'testimonial',
		'orderby'					=> 'rand',
		'posts_per_page'	=> '1',
	);
	$query = new WP_Query( $args );

 if ( $query->have_posts() ) : ?>

	<div class="<?php echo $location; ?>-testimonial">
		<div class="row">
			<div class="<?php echo $column_class; ?> columns testimonial-content">

				<?php	while ( $query->have_posts() ) : $query->the_post(); ?>

					<h3 class="testimonial-header">"<?php the_field('testimonial'); ?>"</h3>
					<cite><?php the_field('person'); ?></cite>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>

<?php endif; ?>