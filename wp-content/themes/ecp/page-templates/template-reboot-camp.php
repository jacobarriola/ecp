<?php

// Template Name: Reboot Camp

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <div class="row">
      <div class="medium-7 columns">
        <?php the_content(); ?>
      </div>
      <div class="medium-5 columns">

        <div class="camp-sidebar">

          <div class="camp-sidebar-block">
            <h2 class="camp-header">What</h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_what'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
            <h2 class="camp-header">When</h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_when'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
            <h2 class="camp-header">Where</h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_where'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
            <h2 class="camp-header">How</h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_how'); ?>
            </div>
          </div>

          <a href="<?php the_field('camp_button_link'); ?>" class="button expanded"><?php the_field('camp_button_copy'); ?></a>

        </div>

      </div>
    </div>

	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'components/conente', 'none' ); ?>

<?php endif; ?>


<?php get_footer('alt'); ?>
