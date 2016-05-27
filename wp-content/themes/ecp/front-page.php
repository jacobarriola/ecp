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

	<?php $images = get_field('carousel_gallery'); ?>

	<?php if ( $images ) : ?>

	  <div class="js-carousel">

	    <?php foreach ( $images as $image ) : ?>

	      <div class="carousel-cell">
	        <img data-flickity-lazyload="<?php echo $image['sizes']['600x475']; ?>" alt="<?php echo $image['alt']; ?>">
	      </div>

	    <?php endforeach; ?>

	  </div>

	<?php endif; ?>

	</div>

</div>

<?php get_template_part( 'components/quote' ); ?>

<div class="what-we-do">

	<div class="row column">

		<div class="what-we-do-content">

			<div class="what-we-do-img">
				<?php
				$image = get_field('what_we_do_image');

				if( !empty($image) ):

					// vars
					$url = $image['url'];
					$alt = $image['alt'];

					// thumbnail
					$size = '600x475';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];

					?>

					<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

				<?php endif; ?>

			</div>

			<div class="what-we-do-copy">
				<h3><?php the_field('what_we_do_header'); ?></h3>
				<?php the_field('what_we_do_copy') ?>
			</div>

		</div>
	</div>
</div>

<?php get_footer('alt'); ?>
