<?php
/**
 * Mangage the CPT adderad.
 *
 * @package Adder\CPT
 */

/**
 * Register the CPT adderad.
 *
 * @since 0.0.1
 */
function adder_register_cpt_adderad() {

	$labels = array(
		'name'                  => _x( 'Ads', 'Post Type General Name', 'adder' ),
		'singular_name'         => _x( 'Ad', 'Post Type Singular Name', 'adder' ),
		'menu_name'             => _x( 'Ads', 'Post Type Menu Name', 'adder' ),
		'name_admin_bar'        => _x( 'Ad', 'Post Type Name in Admin Bar', 'adder' ),
		'archives'              => __( 'Ad Archives', 'adder' ),
		'attributes'            => __( 'Ad Attributes', 'adder' ),
		'parent_item_colon'     => __( 'Parent Ad:', 'adder' ),
		'all_items'             => __( 'All Ads', 'adder' ),
		'add_new_item'          => __( 'Add New Ad', 'adder' ),
		'add_new'               => _x( 'Add New', 'Add New Ad', 'adder' ),
		'new_item'              => __( 'New Ad', 'adder' ),
		'edit_item'             => __( 'Edit Ad', 'adder' ),
		'update_item'           => __( 'Update Ad', 'adder' ),
		'view_item'             => __( 'View Ad', 'adder' ),
		'view_items'            => __( 'View Ads', 'adder' ),
		'search_items'          => __( 'Search Ad', 'adder' ),
		'not_found'             => _x( 'Not found', 'Ad not found', 'adder' ),
		'not_found_in_trash'    => _x( 'Not found in Trash', 'Ad not found in trash', 'adder' ),
		'featured_image'        => __( 'Featured Image', 'adder' ),
		'set_featured_image'    => __( 'Set featured image', 'adder' ),
		'remove_featured_image' => __( 'Remove featured image', 'adder' ),
		'use_featured_image'    => __( 'Use as featured image', 'adder' ),
		'insert_into_item'      => __( 'Insert into ad', 'adder' ),
		'uploaded_to_this_item' => __( 'Uploaded to this ad', 'adder' ),
		'items_list'            => __( 'Ads list', 'adder' ),
		'items_list_navigation' => __( 'Ads list navigation', 'adder' ),
		'filter_items_list'     => __( 'Filter ads list', 'adder' ),
	);
	$args = array(
		'label'                 => __( 'Ad', 'adder' ),
		'description'           => __( 'Better ads', 'adder' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'adderad', $args );

}
add_action( 'init', 'adder_register_cpt_adderad' );
