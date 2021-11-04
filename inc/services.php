<?php 
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'myfirsttheme' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'myfirsttheme' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'myfirsttheme' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'myfirsttheme' ),
		'archives' => __( 'Service Archives', 'myfirsttheme' ),
		'attributes' => __( 'Service Attributes', 'myfirsttheme' ),
		'parent_item_colon' => __( 'Parent Service:', 'myfirsttheme' ),
		'all_items' => __( 'All Services', 'myfirsttheme' ),
		'add_new_item' => __( 'Add New Service', 'myfirsttheme' ),
		'add_new' => __( 'Add New', 'myfirsttheme' ),
		'new_item' => __( 'New Service', 'myfirsttheme' ),
		'edit_item' => __( 'Edit Service', 'myfirsttheme' ),
		'update_item' => __( 'Update Service', 'myfirsttheme' ),
		'view_item' => __( 'View Service', 'myfirsttheme' ),
		'view_items' => __( 'View Services', 'myfirsttheme' ),
		'search_items' => __( 'Search Service', 'myfirsttheme' ),
		'not_found' => __( 'Not found', 'myfirsttheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'myfirsttheme' ),
		'featured_image' => __( 'Featured Image', 'myfirsttheme' ),
		'set_featured_image' => __( 'Set featured image', 'myfirsttheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'myfirsttheme' ),
		'use_featured_image' => __( 'Use as featured image', 'myfirsttheme' ),
		'insert_into_item' => __( 'Insert into Service', 'myfirsttheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'myfirsttheme' ),
		'items_list' => __( 'Services list', 'myfirsttheme' ),
		'items_list_navigation' => __( 'Services list navigation', 'myfirsttheme' ),
		'filter_items_list' => __( 'Filter Services list', 'myfirsttheme' ),
	);
	$args = array(
		'label' => __( 'Service', 'myfirsttheme' ),
		'description' => __( 'Custom Post Type For Services', 'myfirsttheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

?>