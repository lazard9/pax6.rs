<?php 
function clients_register() {

    $labels = array(
        'name'                  => _x( 'Clients', 'post type general name', 'pax6' ),
        'singular_name'         => _x( 'Client', 'post type singular name', 'pax6' ),
        'menu_name'             => __( 'Clients', 'pax6' ),
        'parent_item_colon'     => '',
        'all_items'             => __( 'All Clients', 'pax6' ),
        'view_item'             => __( 'View Client', 'pax6' ),
        'add_new'               => __( 'Add New', 'pax6' ),
        'add_new_item'          => __( 'Add New Client', 'pax6' ),
        'edit_item'             => __( 'Edit Client', 'pax6' ),
        'update_item'           => __( 'Update Client', 'pax6' ),
        'new_item'              => __( 'New Clients', 'pax6' ),
        'search_items'          => __( 'Search Clients', 'pax6' ),
        'not_found'             => __( 'Not Found', 'pax6' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'pax6' ), 
    );

    $args = array(
        'label'                 => __( 'Clients', 'pax6' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable'    => false,  // you should be able to query it
        'show_ui'               => true,  // you should be able to edit it in wp-admin
        'exclude_from_search'   => true,  // you should exclude it from search results
        'show_in_nav_menus'     => false,  // you shouldn't be able to add it to menus
        'has_archive'           => false,  // it shouldn't have archive page
        'rewrite'               => false,  // it shouldn't have rewrite rules 
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-id',
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'can_export'            => true
    ); 
    register_post_type('Clients',$args);

}

add_action( 'init', 'clients_register', 0 );