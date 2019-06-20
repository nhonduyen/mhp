<?php
/**
* Plugin Name: Construction project
* ref: https://www.elegantthemes.com/blog/tips-tricks/how-to-create-a-wordpress-plugin
**/

function register_project() {
    $labels = array(
        'name' => _x( 'Project Mangement', 'project' ),
        'singular_name' => _x( 'Project', 'project' ),
        'add_new' => _x( 'Add New', 'project' ),
        'add_new_item' => _x( 'Add New Project', 'project' ),
        'edit_item' => _x( 'Edit Project', 'project' ),
        'new_item' => _x( 'New Project', 'project' ),
        'view_item' => _x( 'View Project', 'project' ),
        'search_items' => _x( 'Search Project', 'project' ),
        'not_found' => _x( 'No Project found', 'project' ),
        'not_found_in_trash' => _x( 'No Project found in Trash', 'project' ),
        'parent_item_colon' => _x( 'Parent Project:', 'project' ),
        'menu_name' => _x( 'Project Management', 'project' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Project',
        //'supports' => array( 'name', 'host', 'date', 'address', 'thumbnail' ),
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'project' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-multisite',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'project', $args );
}

add_action( 'init', 'register_project' );

function project_taxonomy() {
    register_taxonomy(
        'project',
        'project',
        array(
            'hierarchical' => true,
            'label' => 'Project',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'project',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'project_taxonomy');