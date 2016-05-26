<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ecp
 */

get_header(); ?>

<div class="row column">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'components/content', 'single' ); ?>

	<?php endwhile; // End of the loop. ?>

</div><!-- .row -->

<?php get_footer(); ?>
