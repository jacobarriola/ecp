<?php
/**
 * @package ecp
 */


global $wp_query;

$big = 999999999; // need an unlikely integer


$pagination = paginate_links( array(
	'base' 					=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' 				=> '?paged=%#%',
	'current' 			=> max( 1, get_query_var('paged') ),
	'prev_text'     => __( '&lt;&lt;' ),
	'next_text'			=> __( '&gt;&gt;' ),
	'type'					=> 'array',
	'total' 				=> $wp_query->max_num_pages
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
