<?php

// Template Name: About Us

get_header(); ?>

<div class="row column">

  <?php if ( have_posts() ) : ?>

  	<?php while ( have_posts() ) : the_post(); ?>

      <?php the_title( '<h1>', '</h1>' ); ?>

      <div class="about-us-content">
    		<?php the_content(); ?>
      </div>

  	<?php endwhile; ?>

  <?php else : ?>

  		<?php get_template_part( 'components/content', 'none' ); ?>

  <?php endif; ?>

  <?php if ( have_rows('team_member') ) : ?>

    <?php while ( have_rows('team_member') ) : the_row(); ?>

      <div class="member-block">

        <?php
        $image = get_sub_field('team_member_thumbnail');
        $size = '250x250';
        if ( $image ) {
          echo '<div class="member-thumb">' . wp_get_attachment_image( $image, $size ) . '</div>';
        }
        ?>

        <div class="member-content">

          <h2 class="member-header">
            <?php the_sub_field('team_member_name'); ?>
          </h2>
          <div class="member-bio">
            <?php the_sub_field('team_member_bio'); ?>
          </div>
          
        </div>

      </div><!-- .member-block -->

    <?php endwhile; ?>

  <?php endif; ?>

</div><!-- .row.column -->

<?php get_footer(); ?>
