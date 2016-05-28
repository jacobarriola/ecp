<?php
/**
 * The template for displaying archive pages for the press post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ecp
 */

get_header(); ?>

  <h1 class="screen-reader-text">Press</h1>

  <?php if ( have_posts() ) : ?>

  	<?php while ( have_posts() ) : the_post(); ?>

        <div class="row column archive-press-block">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( '100x100', array('class'=>'float-left press-thumbnail') ); ?>
          </a>
          <span class="press-date"><?php echo get_the_date(); ?></span>
          <a href="<?php the_permalink(); ?>">
            <h2 class="press-title"><strong><?php the_title(); ?></strong></h2>
          </a>
          <?php the_excerpt(); ?>
        </div>

  	<?php endwhile; ?>

      <div class="row column">

  		  <?php get_template_part( 'components/pagination' ); ?>

      </div>

  	<?php else : ?>

      <div class="row column">

    		<?php get_template_part( 'components/content', 'none' ); ?>

      </div>

  <?php endif; ?>

<?php get_footer(); ?>
