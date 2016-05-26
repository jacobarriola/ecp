<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ecp
 */

$thumb_placement = get_field('place_featured_image_on_right');

if ( $thumb_placement ) {
	$thumb_class = 'right-side';
} else {
	$thumb_class = 'default';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-container'); ?>>

	<div class="single-thumbnail <?php echo $thumb_class; ?>">
		<?php the_post_thumbnail( '500x350' ); ?>
	</div>

	<div class="entry-content">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php the_date(); ?> - <?php the_author(); ?>
		</div><!-- .entry-meta -->

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
