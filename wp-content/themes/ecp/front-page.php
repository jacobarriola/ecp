<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ecp
 */

get_header(); ?>

<div class="home-hero">
	<div class="row column">
		<div class="home-hero-content">
			<h2 class="hero-header"><?php the_field('hero_title'); ?></h2>
			<p class="hero-tagline"><?php the_field('hero_tagline'); ?></p>
		</div>
	</div>
</div>

<div class="row home-what">

	<div class="medium-4 columns">
		<h3><?php the_field('home_reboot_headline'); ?></h3>
		<div class="what-copy"><?php the_field('home_reboot_copy'); ?></div>
		<a href="<?php the_permalink( get_field('home_reboot_button_link') ); ?>" class="button expanded">
			<?php the_field('home_reboot_button_copy'); ?>
		</a>
	</div>

	<div class="medium-7 columns">
		<img src="http://fillmurray.com/800/375" alt="">
	</div>

</div>

<?php
	// Fetch a random testimonial
	$args = array(
		'post_type' 			=> 'testimonial',
		'orderby'					=> 'rand',
		'posts_per_page'	=> '1',
	);
	$query = new WP_Query( $args );

 if( $query->have_posts() ) : ?>

	<div class="home-testimonial">
		<div class="row">
			<div class="large-8 columns home-testimonial-content">

				<?php	while ( $query->have_posts() ) : $query->the_post(); ?>

					<h3 class="testimonial-header">"<?php the_field('testimonial'); ?>"</h3>
					<cite><?php the_field('person'); ?></cite>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>

<?php endif; ?>


<div class="what-we-do">

	<div class="row column">

		<div class="what-we-do-content">

			<div class="what-we-do-img">
				<img src="http://fillmurray.com/600/475" alt="">
			</div>

			<div class="what-we-do-copy">
				<h3><?php the_field('what_we_do_header'); ?></h3>
				<?php the_field('what_we_do_copy') ?>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
