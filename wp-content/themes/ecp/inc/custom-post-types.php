<?php

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => __( 'Testimonials', 'ecp' ),
		"singular_name" => __( 'Testimonial', 'ecp' ),
		);

	$args = array(
		"label" => __( 'Testimonials', 'ecp' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,"menu_icon" => "dashicons-format-quote",
		"supports" => array( "title" ),
	);
	register_post_type( "testimonial", $args );

	$labels = array(
		"name" => __( 'Quotes', 'ecp' ),
		"singular_name" => __( 'Quote', 'ecp' ),
		);

	$args = array(
		"label" => __( 'Quotes', 'ecp' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quote", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,"menu_icon" => "dashicons-groups",
		"supports" => array( "title" ),
	);
	register_post_type( "quote", $args );

	$labels = array(
		"name" => __( 'Press', 'ecp' ),
		"singular_name" => __( 'Press', 'ecp' ),
		);

	$args = array(
		"label" => __( 'Press', 'ecp' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "press", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,"menu_icon" => "dashicons-edit",
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	);
	register_post_type( "press", $args );

// End of cptui_register_my_cpts()
}
