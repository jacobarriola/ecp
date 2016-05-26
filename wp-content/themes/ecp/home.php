<?php
/**
 * The home.php template file (blog post archive).
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ecp
 */

get_header();

$excluded_posts = [];

$args = array(
	'post_type'        => 'post',
  'posts_per_page'   => '1',
  'cat'              => '3',
);

$query = new WP_Query( $args );

if( $query->have_posts() ) : ?>

  <div class="row post-archive-featured">
    <?php	while ( $query->have_posts() ) : $query->the_post(); ?>

      <?php
      // Capture the post id of post that is in this component
      $excluded_posts[] = $post->ID;
      ?>
      <div class="medium-5 medium-push-7 columns">
        <a href="<?php the_permalink(); ?>" title="Peramlink to <?php the_title(); ?>">
          <?php the_post_thumbnail( '500x350' ); ?>
        </a>
      </div>
      <div class="medium-7 columns medium-pull-5 post-archive-content">
        <h2 class="post-archive-featured-header">
          <a href="<?php the_permalink(); ?>" title="Peramlink to <?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php the_date( '', '<span class="post-archive-date">', '-</span> ' ); the_excerpt(); ?>
      </div>

    <?php endwhile; wp_reset_postdata(); ?>
  </div><!-- .row -->

<?php endif; ?>

<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args = array(
	'post_type'          => 'post',
  'posts_per_page'     => '5',
  'post__not_in'			 => $excluded_posts,
  'paged'              => $paged,
);
$main_query = new WP_Query( $args );

if ( $main_query->have_posts() ) : ?>

  <div class="post-archive-container">
    <div class="row column">

      <?php	while ( $main_query->have_posts() ) : $main_query->the_post(); ?>

        <div class="post-archive-block">

          <div class="post-archive-thumb">
            <a href="<?php the_permalink(); ?>" title="Peramlink to <?php the_title(); ?>">
              <?php the_post_thumbnail( '500x350' ); ?>
            </a>
          </div>
          <div class="post-archive-content">
            <h2 class="post-archive-header">
              <a href="<?php the_permalink(); ?>" title="Peramlink to <?php the_title(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <span class="post-archive-date"><?php echo get_the_date(); ?>-</span> <?php the_excerpt(); ?>
          </div>
        </div>

      <?php endwhile; wp_reset_postdata(); ?>

      <?php // Pagination

      $big = 999999999; // need an unlikely integer


      $pagination = paginate_links( array(
      	'base' 					=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      	'format' 				=> '?paged=%#%',
      	'current' 			=> max( 1, get_query_var('paged') ),
      	'prev_text'     => __( '&lt;' ),
      	'next_text'			=> __( '&gt;' ),
      	'type'					=> 'array',
      	'total' 				=> $main_query->max_num_pages
      ) );

      ?>

      <?php if ( is_array( $pagination ) ) : ?>
      	<nav class="pagination text-center">
      		<ul>
      			<?php foreach ($pagination as $value) : ?>
      				<li><?php echo $value; ?></li>
      			<?php endforeach; ?>
      		</ul>
      	</nav>
      <?php endif; ?>

    </div>
  </div>

<?php endif; ?>


<?php get_footer();
