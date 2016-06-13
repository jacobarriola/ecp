<?php

// Template Name: Reboot Camp

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <div class="row">
      <div class="medium-7 large-6 columns">
        <?php the_content(); ?>
      </div>
      <div class="medium-5 columns">

        <div class="camp-sidebar">

          <div class="camp-sidebar-block">
            <h2 class="camp-header"><?php the_field('first_section_header'); ?></h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_what'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
						<h2 class="camp-header"><?php the_field('second_section_header'); ?></h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_when'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
						<h2 class="camp-header"><?php the_field('third_section_header'); ?></h2>
            <div class="camp-sidebar-content">
              <?php the_field('camp_where'); ?>
            </div>
          </div>

          <div class="camp-sidebar-block">
						<h2 class="camp-header"><?php the_field('fourth_section_header'); ?></h2>
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
