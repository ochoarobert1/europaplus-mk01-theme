<?php


function europaplus_custom_post_type() {

    /* CUSTOM POST TYPE */
    $labels = array(
        'name'                  => _x( 'Help Articles', 'Post Type General Name', 'europaplus' ),
        'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'europaplus' ),
        'menu_name'             => __( 'Help Articles', 'europaplus' ),
        'name_admin_bar'        => __( 'Help Articles', 'europaplus' ),
        'archives'              => __( 'Help Articles Archives', 'europaplus' ),
        'attributes'            => __( 'Article Attributes', 'europaplus' ),
        'parent_item_colon'     => __( 'Parent Article:', 'europaplus' ),
        'all_items'             => __( 'All Articles', 'europaplus' ),
        'add_new_item'          => __( 'Add New Article', 'europaplus' ),
        'add_new'               => __( 'Add New', 'europaplus' ),
        'new_item'              => __( 'New Article', 'europaplus' ),
        'edit_item'             => __( 'Edit Article', 'europaplus' ),
        'update_item'           => __( 'Update Article', 'europaplus' ),
        'view_item'             => __( 'View Article', 'europaplus' ),
        'view_items'            => __( 'View Articles', 'europaplus' ),
        'search_items'          => __( 'Search Article', 'europaplus' ),
        'not_found'             => __( 'Not found', 'europaplus' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'europaplus' ),
        'featured_image'        => __( 'Featured Image', 'europaplus' ),
        'set_featured_image'    => __( 'Set featured image', 'europaplus' ),
        'remove_featured_image' => __( 'Remove featured image', 'europaplus' ),
        'use_featured_image'    => __( 'Use as featured image', 'europaplus' ),
        'insert_into_item'      => __( 'Insert into Article', 'europaplus' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Article', 'europaplus' ),
        'items_list'            => __( 'Help Articles list', 'europaplus' ),
        'items_list_navigation' => __( 'Help Articles list navigation', 'europaplus' ),
        'filter_items_list'     => __( 'Filter Help Articles list', 'europaplus' ),
    );
    $args = array(
        'label'                 => __( 'Help Articles', 'europaplus' ),
        'description'           => __( 'Help Articles & Description', 'europaplus' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'help-topics' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-code-standards',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'help-articles', $args );

    /* CUSTOM TAXONOMY */
    $labels = array(
        'name'                       => _x( 'Help Topics', 'Taxonomy General Name', 'europaplus' ),
        'singular_name'              => _x( 'Help Topic', 'Taxonomy Singular Name', 'europaplus' ),
        'menu_name'                  => __( 'Help Topics', 'europaplus' ),
        'all_items'                  => __( 'All Help Topics', 'europaplus' ),
        'parent_item'                => __( 'Parent Topic', 'europaplus' ),
        'parent_item_colon'          => __( 'Parent Topic:', 'europaplus' ),
        'new_item_name'              => __( 'New Topic Name', 'europaplus' ),
        'add_new_item'               => __( 'Add New Topic', 'europaplus' ),
        'edit_item'                  => __( 'Edit Topic', 'europaplus' ),
        'update_item'                => __( 'Update Topic', 'europaplus' ),
        'view_item'                  => __( 'View Topic', 'europaplus' ),
        'separate_items_with_commas' => __( 'Separate Topics with commas', 'europaplus' ),
        'add_or_remove_items'        => __( 'Add or remove Topics', 'europaplus' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'europaplus' ),
        'popular_items'              => __( 'Popular Topics', 'europaplus' ),
        'search_items'               => __( 'Search Topics', 'europaplus' ),
        'not_found'                  => __( 'Not Found', 'europaplus' ),
        'no_terms'                   => __( 'No Topics', 'europaplus' ),
        'items_list'                 => __( 'Topics list', 'europaplus' ),
        'items_list_navigation'      => __( 'Topics list navigation', 'europaplus' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'help-topics', array( 'help-articles' ), $args );

}
add_action( 'init', 'europaplus_custom_post_type', 0 );


