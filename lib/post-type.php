<?php

function lifted_locations_post_type() 
{

	//Labels
	$labels = array(
		'name'                  => 'Locations',
		'singular_name'         => 'Location',
		'menu_name'             => 'Locations',
		'name_admin_bar'        => 'Location',
		'archives'              => 'Location Archives',
		'parent_item_colon'     => 'Parent Location:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Location',
		'add_new'               => 'Add New',
		'new_item'              => 'New Location',
		'edit_item'             => 'Edit Location',
		'update_item'           => 'Update Location',
		'view_item'             => 'View Location',
		'search_items'          => 'Search Locations',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Location Image',
		'set_featured_image'    => 'Set location image',
		'remove_featured_image' => 'Remove location image',
		'use_featured_image'    => 'Use as location image',
		'insert_into_item'      => 'Insert into location',
		'uploaded_to_this_item' => 'Uploaded to this location',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter Locations',
	);
	//Arguments
	$args = array(
		'label'                 => 'Location',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'locations', $args );

}
add_action( 'init', 'lifted_locations_post_type', 0 );