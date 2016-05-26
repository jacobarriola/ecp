<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ecp
 */

get_header(); ?>

<div class="row column">

  <?php if ( have_posts() ) : ?>

  	<?php while ( have_posts() ) : the_post(); ?>

      <div class="testimonial-archive-block">
    		&quot;<?php the_field('testimonial'); ?>&quot;
        <cite><?php the_field('person'); ?></cite>
      </div>

  	<?php endwhile; ?>

  		<?php get_template_part( 'components/pagination' ); ?>

  	<?php else : ?>

  		<?php get_template_part( 'components/content', 'none' ); ?>

  <?php endif; ?>
</div>
<?php get_footer(); ?>
