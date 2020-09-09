<?php
/* IMAGES RESPONSIVE ON ATTACHMENT IMAGES */
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

/* ADD CONTENT WIDTH FUNCTION */

function europaplus_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'europaplus_content_width', 1170 );
}
add_action( 'after_setup_theme', 'europaplus_content_width', 0 );

/* ADD CONTENT WIDTH FUNCTION */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'topnav') {
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function europaplus_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'europaplus_pingback_header' );

/* CUSTOM MAILCHIMP FORM  */
class europaplus_custom_mailchimp_form extends WP_Widget {

    public function europaplus_custom_mailchimp_form_scripts() {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('admin-functions', get_template_directory_uri() . '/js/admin-functions.js', array('jquery'), null, true);
    }

    /* CONSTRUCT */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'custom_mailchimp_form',
            'description' => __('Este widget custom mostrará un formulario de Mailchimp personalizado, deberá agregarse la lista de Mailchimp al cual el user ingresará al momento de registrarse', 'europaplus')
        );
        parent::__construct( 'europaplus_custom_mailchimp_form', 'Formulario de Mailchimp', $widget_ops );

        add_action('admin_enqueue_scripts', array($this, 'europaplus_custom_mailchimp_form_scripts'));
    }

    /* OUTPUT */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        $subtitle = ! empty( $instance['subtitle'] ) ? $instance['subtitle'] : '';
        $mailchimp_key = ! empty( $instance['mailchimp_key'] ) ? $instance['mailchimp_key'] : '';
        $mailchimp_list = ! empty( $instance['mailchimp_list'] ) ? $instance['mailchimp_list'] : '';

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        if ( ! empty( $instance['subtitle'] ) ) {
            echo '<h3>'. apply_filters( 'widget_title', $instance['subtitle'] ) . '</h3>';
        }

        $unique_formid = uniqid('mailchimp_form_');
        $unique_id = substr($unique_formid, 15);
        $unique_buttonid = 'mailchimp_button_' . substr($unique_formid, 15);
?>
<form id="<?php echo $unique_formid; ?>" class="mailchimp_form" type="POST">
    <div class="custom-form-control-container">
        <label for="EMAIL"><?php _e('Email', 'europaplus'); ?><strong>*</strong></label>
        <input type="email" name="EMAIL" id="EMAIL" class="form-control" placeholder="<?php echo esc_html_e('Enter your email address here', 'europaplus'); ?>" />
        <small class="danger d-none"></small>
        <label for="FNAME"><?php _e('Name', 'europaplus'); ?><strong>*</strong></label>
        <input type="text" name="FNAME" id="FNAME" class="form-control" placeholder="<?php echo esc_html_e('Enter your name here', 'europaplus'); ?>" />
        <small class="danger d-none"></small>
        <label for="LANGUAGE"><?php _e('Language', 'europaplus'); ?><strong>*</strong></label>
        <input type="text" name="LANGUAGE" id="LANGUAGE" class="form-control" placeholder="<?php echo esc_html_e('Enter your language here', 'europaplus'); ?>" />
        <small class="danger d-none"></small>

        <input type="hidden" name="mailchimp-list" id="mailchimp-list" class="form-control" value="<?php echo $mailchimp_list; ?>" />
    </div>
    <button id="<?php echo $unique_buttonid; ?>" class="btn btn-md btn-submit">
        <?php _e('Sign up', 'europaplus'); ?></button>
    <div id="response_<?php echo $unique_id; ?>" class="form-response"></div>
</form>

<?php
        echo $args['after_widget'];
    }

    /* FORM */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $subtitle = ! empty( $instance['subtitle'] ) ? $instance['subtitle'] : '';
        $mailchimp_key = ! empty( $instance['mailchimp_key'] ) ? $instance['mailchimp_key'] : '';
        $mailchimp_list = ! empty( $instance['mailchimp_list'] ) ? $instance['mailchimp_list'] : '';

?>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Título:', 'europaplus' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    <small>
        <?php _e('Título del Widget', 'europaplus'); ?></small>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'subtitle' ) ); ?>">
        <?php esc_attr_e( 'Subtitilo:', 'europaplus' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subtitle' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subtitle' ) ); ?>" type="text" value="<?php echo esc_attr( $subtitle ); ?>">
    <small>
        <?php _e('Agregue aqui el subtitulo del widget', 'europaplus'); ?></small>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'mailchimp_key' ) ); ?>">
        <?php esc_attr_e( 'API Key de Mailchimp:', 'europaplus' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mailchimp_key' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mailchimp_key' ) ); ?>" type="text" value="<?php echo esc_attr( $mailchimp_key ); ?>">
    <small>
        <?php _e('Aquí podrá agregar el APIKey de Mailchimp a donde debe llegar el correo del suscriptor', 'europaplus'); ?></small>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'mailchimp_list' ) ); ?>">
        <?php esc_attr_e( 'Lista de Mailchimp:', 'europaplus' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mailchimp_list' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mailchimp_list' ) ); ?>" type="text" value="<?php echo esc_attr( $mailchimp_list ); ?>">
    <small>
        <?php _e('Aquí podrá agregar el ListID de Mailchimp a donde debe llegar el correo del suscriptor', 'europaplus'); ?></small>
</p>

<?php
    }

    /* UPDATE */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['subtitle'] = ( ! empty( $new_instance['subtitle'] ) ) ? sanitize_text_field( $new_instance['subtitle'] ) : '';
        $instance['mailchimp_key'] = ( ! empty( $new_instance['mailchimp_key'] ) ) ? sanitize_text_field( $new_instance['mailchimp_key'] ) : '';
        $instance['mailchimp_list'] = ( ! empty( $new_instance['mailchimp_list'] ) ) ? sanitize_text_field( $new_instance['mailchimp_list'] ) : '';

        return $instance;
    }
}
