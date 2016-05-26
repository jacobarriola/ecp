<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecp
 */
?>

</div><!-- #content -->

<footer class="site-footer" role="contentinfo">

	<div class="row column">

		<?php get_template_part( 'components/testimonial' ); ?>

	</div><!-- .column.row -->

	<p class="footer-legal text-center">All Rights Reserverd. &copy; <?php echo Date('Y'); ?></p>
</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>
