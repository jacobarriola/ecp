<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ecp
 */

get_header(); ?>

<div class="row">

	<div class="medium-8 medium-centered columns"><!-- .columns start -->

		<h1 class="page-title text-center" style="margin: 4em 0 8em 0;"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ecp' ); ?></h1>

	</div><!-- .columns -->


</div><!-- .row -->

<?php get_footer('alt'); ?>
