<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'europaplus' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'europaplus' ),
        'menu_name'             => __( 'Portafolio', 'europaplus' ),
        'name_admin_bar'        => __( 'Portafolio', 'europaplus' ),
        'archives'              => __( 'Archivo de Portafolio', 'europaplus' ),
        'attributes'            => __( 'Atributos de Portafolio', 'europaplus' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'europaplus' ),
        'all_items'             => __( 'Todos los Items', 'europaplus' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'europaplus' ),
        'add_new'               => __( 'Agregar Nuevo', 'europaplus' ),
        'new_item'              => __( 'Nuevo Item', 'europaplus' ),
        'edit_item'             => __( 'Editar Item', 'europaplus' ),
        'update_item'           => __( 'Actualizar Item', 'europaplus' ),
        'view_item'             => __( 'Ver Item', 'europaplus' ),
        'view_items'            => __( 'Ver Portafolio', 'europaplus' ),
        'search_items'          => __( 'Buscar en Portafolio', 'europaplus' ),
        'not_found'             => __( 'No hay Resultados', 'europaplus' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'europaplus' ),
        'featured_image'        => __( 'Imagen Destacada', 'europaplus' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'europaplus' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'europaplus' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'europaplus' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'europaplus' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'europaplus' ),
        'items_list'            => __( 'Listado del Portafolio', 'europaplus' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'europaplus' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'europaplus' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'europaplus' ),
        'description'           => __( 'Portafolio de Desarrollos', 'europaplus' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
