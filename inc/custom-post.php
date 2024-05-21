<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 */

   // Products Post Type
function products_custom_posts() {
	$labels = array(
		'name'                => __( 'Products' ),
		'singular_name'       => __( 'Products'),
		'menu_name'           => __( 'Products'),
		'parent_item_colon'   => __( 'Parent Products'),
		'all_items'           => __( 'All Products'),
		'view_item'           => __( 'View Products'),
		'add_new_item'        => __( 'Add New Latest Products'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Products'),
		'update_item'         => __( 'Update Products'),
		'search_items'        => __( 'Search Products'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Products'),
		'description'         => __( 'Best Products'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-calendar',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'products-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'products',
			'with_front' => true
		)
);
	register_post_type( 'products', $args );
}
add_action( 'init', 'products_custom_posts', 0 );