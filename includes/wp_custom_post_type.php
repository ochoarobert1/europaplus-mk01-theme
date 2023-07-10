<?php

// Register Custom Post Type
function prices_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Precios', 'Post Type General Name', 'europaplus' ),
		'singular_name'         => _x( 'Precio', 'Post Type Singular Name', 'europaplus' ),
		'menu_name'             => __( 'Precios', 'europaplus' ),
		'name_admin_bar'        => __( 'Precios', 'europaplus' ),
		'archives'              => __( 'Archivo de Precios', 'europaplus' ),
		'attributes'            => __( 'Atributos de Precio', 'europaplus' ),
		'parent_item_colon'     => __( 'Precio Padre:', 'europaplus' ),
		'all_items'             => __( 'Todos los Precios', 'europaplus' ),
		'add_new_item'          => __( 'Agregar Nuevo Precio', 'europaplus' ),
		'add_new'               => __( 'Agregar Nuevo', 'europaplus' ),
		'new_item'              => __( 'Nuevo Precio', 'europaplus' ),
		'edit_item'             => __( 'Editar Precio', 'europaplus' ),
		'update_item'           => __( 'Actualizar Precio', 'europaplus' ),
		'view_item'             => __( 'Ver Precio', 'europaplus' ),
		'view_items'            => __( 'Ver Precios', 'europaplus' ),
		'search_items'          => __( 'Buscar Precio', 'europaplus' ),
		'not_found'             => __( 'No hay resultados', 'europaplus' ),
		'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'europaplus' ),
		'featured_image'        => __( 'Imagen destacada', 'europaplus' ),
		'set_featured_image'    => __( 'Colocar Imagen destacada', 'europaplus' ),
		'remove_featured_image' => __( 'Remover Imagen destacada', 'europaplus' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'europaplus' ),
		'insert_into_item'      => __( 'Insertar en Precio', 'europaplus' ),
		'uploaded_to_this_item' => __( 'Cargado a este Precio', 'europaplus' ),
		'items_list'            => __( 'Listado de Precios', 'europaplus' ),
		'items_list_navigation' => __( 'Navegación del Listado de Precios', 'europaplus' ),
		'filter_items_list'     => __( 'Filtro del Listado de Precios', 'europaplus' ),
	);
	$args = array(
		'label'                 => __( 'Precio', 'europaplus' ),
		'description'           => __( 'Precios y Tarifas', 'europaplus' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'precios', $args );

}
add_action( 'init', 'prices_custom_post_type', 0 );

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


