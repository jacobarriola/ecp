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
			<h2 class="hero-header">ReBoot Camp</h2>
			<p class="hero-tagline">Define your life. Make it Happen.</p>
		</div>
	</div>
</div>

<div class="row home-what">

	<div class="medium-4 columns">
		<h3>What is Reboot Camp?</h3>
		<div class="what-copy">
			<p>A one-day, highly interactive workshop designed to help you re-imagine your life. It’s much-needed time and space where you can focus on the various concepts and tools we’ve devised to help you re-define what it means to live in balance, to live in alignment and turn what you’ve wanted to do or thought about doing, into what you ARE doing. It’s also meeting a  group of like-minded people, with whom you’ll  exchange ideas, give and get supportive feedback,
				as well as the invaluable opportunity of creating an ongoing accountability community.
			</p>
		</div>
		<a href="/reboot-camp" class="button expanded">Learn More</a>
	</div>

	<div class="medium-7 columns">
		<img src="http://fillmurray.com/800/375" alt="">
	</div>

</div>

<?php
	// Fetch a random testimonial
	$args = array(
		'post_type' 		=> 'testimonial',
		'order_by'			=> 'rand',
		'post_per_page'	=> 1,
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
				<h3>What Do We Do?</h3>
				<p>We help people think more creatively about how to elevate their lives.
In creating content for our workshops with straightforward, easy-to-use guidelines and tools, we help individuals define their own brand of success, based upon what’s important to them and what they already do well. We also provide
a well-tested formula for an action plan, with realistic goal setting and suggested accountability tips, to ensure that each person’s success stays within their reach.</p>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
