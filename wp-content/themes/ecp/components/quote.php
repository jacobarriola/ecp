<?php

  if ( is_front_page() ) {
    $location = 'home';
  } else {
    $location = 'site';
  }

	// Fetch a random testimonial
	$args = array(
		'post_type' 			=> 'quote',
		'orderby'					=> 'rand',
		'posts_per_page'	=> '1',
	);
	$query = new WP_Query( $args );

 if ( $query->have_posts() ) : ?>

	<div class="<?php echo $location; ?>-quote">
		<div class="row">
			<div class="column quote-content">

				<?php	while ( $query->have_posts() ) : $query->the_post(); ?>

					<h3 class="quote-header">"<?php the_field('testimonial'); ?>"</h3>
					<cite><?php the_field('person'); ?></cite>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>

<?php endif; ?>
