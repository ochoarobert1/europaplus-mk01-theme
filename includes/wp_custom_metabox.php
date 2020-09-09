<?php
add_action( 'cmb2_admin_init', 'europaplus_register_custom_metabox' );
function europaplus_register_custom_metabox() {
    $prefix = 'eplus_';

    $cmb_metabox = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Información Extra', 'cmb2' ),
        'object_types'  => array( 'post', 'help-articles' ), // Post type
    ) );

    $cmb_metabox->add_field( array(
        'name'       => esc_html__( 'Link Correspondiente al idioma contrario', 'cmb2' ),
        'desc'       => esc_html__( 'Ingrese aqui el link de la entrada que corresponda en el idioma contrario', 'cmb2' ),
        'id'         => $prefix . 'lang_link',
        'type'       => 'text_url'
    ) );
}
