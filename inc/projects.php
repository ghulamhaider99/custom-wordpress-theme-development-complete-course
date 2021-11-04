<?php
// Register Custom Post Type Project
function create_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Type General Name', 'myfirsttheme' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', 'myfirsttheme' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'myfirsttheme' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'myfirsttheme' ),
		'archives' => __( 'Project Archives', 'myfirsttheme' ),
		'attributes' => __( 'Project Attributes', 'myfirsttheme' ),
		'parent_item_colon' => __( 'Parent Project:', 'myfirsttheme' ),
		'all_items' => __( 'All Projects', 'myfirsttheme' ),
		'add_new_item' => __( 'Add New Project', 'myfirsttheme' ),
		'add_new' => __( 'Add New', 'myfirsttheme' ),
		'new_item' => __( 'New Project', 'myfirsttheme' ),
		'edit_item' => __( 'Edit Project', 'myfirsttheme' ),
		'update_item' => __( 'Update Project', 'myfirsttheme' ),
		'view_item' => __( 'View Project', 'myfirsttheme' ),
		'view_items' => __( 'View Projects', 'myfirsttheme' ),
		'search_items' => __( 'Search Project', 'myfirsttheme' ),
		'not_found' => __( 'Not found', 'myfirsttheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'myfirsttheme' ),
		'featured_image' => __( 'Featured Image', 'myfirsttheme' ),
		'set_featured_image' => __( 'Set featured image', 'myfirsttheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'myfirsttheme' ),
		'use_featured_image' => __( 'Use as featured image', 'myfirsttheme' ),
		'insert_into_item' => __( 'Insert into Project', 'myfirsttheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'myfirsttheme' ),
		'items_list' => __( 'Projects list', 'myfirsttheme' ),
		'items_list_navigation' => __( 'Projects list navigation', 'myfirsttheme' ),
		'filter_items_list' => __( 'Filter Projects list', 'myfirsttheme' ),
	);
	$args = array(
		'label' => __( 'Project', 'myfirsttheme' ),
		'description' => __( 'This custom post for Projects', 'myfirsttheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
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
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );

?>