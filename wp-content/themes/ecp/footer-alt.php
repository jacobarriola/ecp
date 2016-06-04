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

	<div class="row">

		<div class="medium-centered medium-10 columns">

			<div class="row">

				<div class="medium-4 columns">
					<h2 class="footer-header">Contact Us</h2>
					<p>If you have questions or comments, we'd love to hear from you.</p>
					<ul class="footer-social">
						<?php get_template_part( 'components/social' ); ?>
					</ul>
				</div>

				<div class="medium-7 columns">
						<?php gravity_form(1, false, false, false, '', true, 12); ?>
				</div>
			</div>


		</div>

	</div><!-- .column.row -->

</footer><!-- #colophon -->



<?php wp_footer(); ?>
</body>
</html>
