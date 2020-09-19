<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) add_action('wp_enqueue_scripts', 'my_jquery_enqueue');
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js',  array('jquery'), '3.0.1', false);
    } else {
        /*- JQUERY ON WEB  -*/
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON WEB  -*/
        wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
}

/* NOW ALL THE JS FILES */
require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

// WALKER COMPLETO TOMADO DESDE EL NAVBAR COLLAPSE
require_once('includes/class-wp-bootstrap-navwalker.php');

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if ( class_exists( 'WooCommerce' ) ) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if ( defined( 'JETPACK__VERSION' ) ) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */

load_theme_textdomain( 'europaplus', get_template_directory() . '/languages' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-background',
                  array(
                      'default-image' => '',    // background image default
                      'default-color' => 'ffffff',    // background color default (dont add the #)
                      'wp-head-callback' => '_custom_background_cb',
                      'admin-head-callback' => '',
                      'admin-preview-callback' => ''
                  )
                 );
add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
) );


add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus( array(
    'header_menu' => __( 'Menu Header - Principal', 'europaplus' ),
    'footer_menu' => __( 'Menu Footer - Principal', 'europaplus' ),
) );

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action( 'widgets_init', 'europaplus_widgets_init' );
function europaplus_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Principal', 'europaplus' ),
        'id' => 'main_sidebar',
        'description' => __( 'Estos widgets seran vistos en las entradas y páginas del sitio', 'europaplus' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebars( 3, array(
        'name'          => __('Footer Section %d', 'flowerclub'),
        'id'            => 'sidebar_footer',
        'description'   => __('Footer Section', 'flowerclub'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ) );

    register_widget( 'europaplus_custom_mailchimp_form' );
}

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles() {
    $version_remove = NULL;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');


function dashboard_footer() {
    echo '<span id="footer-thankyou">';
    _e ('Gracias por crear con ', 'europaplus' );
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e ('Tema desarrollado por ', 'europaplus' );
    echo '<a href="http://robertochoa.com.ve/?utm_source=footer_admin&utm_medium=link&utm_content=europaplus" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

//require_once('includes/wp_custom_theme_control.php');

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 9999, 400, true);
}
if ( function_exists('add_image_size') ) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('blog_img', 276, 217, true);
    add_image_size('single_img', 636, 297, true );
}

/* --------------------------------------------------------------
    AJAX FOR HELP ARTICLES
-------------------------------------------------------------- */

function europaplus_json_help_articles_handler () {
    $links_array = new WP_Query(array('post_type' => 'help-articles', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date'));
    if ($links_array->have_posts()) :

    while ($links_array->have_posts()) : $links_array->the_post();
    $array_posts[] = array('id' => get_the_ID(), 'title' => get_the_title());
    endwhile;

    endif;
    wp_reset_query();

    $array_response = json_encode($array_posts);
    echo $array_response;
    wp_die();
}

add_action('wp_ajax_europaplus_json_help_articles', 'europaplus_json_help_articles_handler');
add_action('wp_ajax_nopriv_europaplus_json_help_articles', 'europaplus_json_help_articles_handler');


/* --------------------------------------------------------------
    REMOVE ADMIN BAR ON USERS
-------------------------------------------------------------- */

function custom_admin_remove_bar() {
    $user = wp_get_current_user();
    $allowed_roles = array('editor', 'author');
    if( array_intersect($allowed_roles, $user->roles ) ) {
        add_filter('show_admin_bar', '__return_false');
    }
}

add_action('wp_head', 'custom_admin_remove_bar');

/* --------------------------------------------------------------
    CUSTOM LINK WRAPPER FOR MULTISITE
-------------------------------------------------------------- */
function custom_multisite_link($lang, $link) {
    $new_link = '';

    if ( is_front_page() && is_home() ) {
        if ($lang == 'es_ES') {
            $new_link = $link . '/esp';
        } else {
            $new_link = $link . '';
        }
    } elseif ( is_front_page()){
        if ($lang == 'es_ES') {
            $new_link = $link . '/esp';
        } else {
            $new_link = $link . '';
        }


    } elseif ( is_home()){
        if ($lang == 'es_ES') {
            $new_link = $link . '/esp';
        } else {
            $new_link = $link . '';
        }
    } else {
        if (is_post_type_archive('help-articles')) {
            if ($lang == 'es_ES') {
                $new_link = network_home_url('/esp/help-articles');
            } else {
                $new_link = network_home_url('/') . 'help-articles';
            }
        }

        if (is_archive()) {
            if (strpos($link, 'https://blog.europamas.com/esp/') !== false) {
                $link_archive = explode('https://blog.europamas.com/esp/', $link);
            } else {
                $link_archive = explode('https://blog.europamas.com/', $link);
            }

            if ($lang == 'es_ES') {
                $new_link = network_home_url('/esp/') . $link_archive[1];
            } else {
                $new_link = network_home_url('/') . $link_archive[1];
            }
        }

        if (is_category()) {
            if (strpos($link, 'https://blog.europamas.com/esp/category/') !== false) {
                $link_archive = explode('https://blog.europamas.com/esp/category/', $link);
            } else {
                $link_archive = explode('https://blog.europamas.com/category/', $link);
            }

            if ($lang == 'es_ES') {
                $new_link = network_home_url('/esp/category/') . $link_archive[1];
            } else {
                $new_link = network_home_url('/category/') . $link_archive[1];
            }
        }

        if (is_single()) {
            if ($lang == get_locale()) {
                $new_link = get_permalink();
            } else {
                $new_link = get_post_meta(get_queried_object_id(), 'eplus_lang_link', true);
            }
        }
    }
    echo $new_link;
}

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
