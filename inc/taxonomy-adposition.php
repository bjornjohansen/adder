<?php
/**
 * Handles the taxonomy adposition.
 *
 * @package Adder
 */

namespace Adder;

/**
 * Register the adposition taxonomy
 *
 * @since 0.0.1
 */
function register_taxonomy_adposition() {

	$labels = [
		'name'                       => _x( 'Ad positions', 'Taxonomy General Name', 'adder' ),
		'singular_name'              => _x( 'Ad position', 'Taxonomy Singular Name', 'adder' ),
		'menu_name'                  => _x( 'Ad positions', 'Taxonomy Menu Name', 'adder' ),
		'all_items'                  => __( 'All Ad Positions', 'adder' ),
		'parent_item'                => __( 'Parent Ad Position', 'adder' ),
		'parent_item_colon'          => __( 'Parent Ad Position:', 'adder' ),
		'new_item_name'              => __( 'New Ad Position', 'adder' ),
		'add_new_item'               => __( 'Add New Ad Position', 'adder' ),
		'edit_item'                  => __( 'Edit Ad Position', 'adder' ),
		'update_item'                => __( 'Update Ad Position', 'adder' ),
		'view_item'                  => __( 'View Ad Position', 'adder' ),
		'separate_items_with_commas' => __( 'Separate ad positions with commas', 'adder' ),
		'add_or_remove_items'        => __( 'Add or remove ad positions', 'adder' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'adder' ),
		'popular_items'              => __( 'Popular Ad Positions', 'adder' ),
		'search_items'               => __( 'Search Ad Positions', 'adder' ),
		'not_found'                  => _x( 'Not Found', 'Not Found in ad position taxonomy', 'adder' ),
		'no_terms'                   => __( 'No ad positions', 'adder' ),
		'items_list'                 => __( 'Ad positions list', 'adder' ),
		'items_list_navigation'      => __( 'Ad positions list navigation', 'adder' ),
	];
	$args = [
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
		'show_in_rest'               => false,
	];
	register_taxonomy( 'adposition', [ 'adderad' ], $args );

}

