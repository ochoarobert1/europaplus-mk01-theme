<!DOCTYPE html>
<html <?php language_attributes() ?>>

    <head>
        <?php /* MAIN STUFF */ ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
        <meta name="robots" content="NOODP, INDEX, FOLLOW" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="dns-prefetch" href="//connect.facebook.net" />
        <link rel="dns-prefetch" href="//facebook.com" />
        <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
        <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
        <link rel="dns-prefetch" href="//google-analytics.com" />
        <?php /* FAVICONS */ ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
        <?php /* THEME NAVBAR COLOR */ ?>
        <meta name="msapplication-TileColor" content="#454545" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
        <meta name="theme-color" content="#454545" />
        <?php /* AUTHOR INFORMATION */ ?>
        <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
        <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
        <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
        <?php wp_title('|', false, 'right'); ?>
        <?php wp_head() ?>
        <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php /* IE COMPATIBILITIES */ ?>
        <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
        <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
        <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
        <!--[if gt IE 8]><!-->
        <html <?php language_attributes(); ?> class="no-js" />
        <!--<![endif]-->
        <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script> <![endif]-->
        <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
        <?php get_template_part('includes/fb-script'); ?>
        <?php get_template_part('includes/ga-script'); ?>
    </head>
    <?php global $wp; ?>
    <?php $current_url = network_home_url( $wp->request )?>
    <body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
        <div id="fb-root"></div>
        <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <div class="row no-gutters">
                <div class="the-header col-12">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-between">
                            <div class="header-logo col-xl-5 col-lg-2 col-md-3 col-sm-6 col-6 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                                <a class="navbar-brand" href="https://europamas.com/browse" title="<?php echo get_bloginfo('name'); ?>">
                                    <?php ?> <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                                    <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                                    <?php if (!empty($image)) { ?>
                                    <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="header-navbar col-xl-4 col-lg-6 col-md-9 col-sm-6 col-6 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                <nav class="navbar navbar-expand-md" role="navigation">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'header_menu',
                                        'depth'             => 1, // 1 = with dropdowns, 0 = no dropdowns.
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'navbar-nav ml-auto',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker()
                                    ) );
                                    ?>

                                </nav>
                            </div>
                            <div class="header-social col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                                <a href="https://www.facebook.com/EuropaMas"><i class="fa fa-facebook-official"></i></a>
                                <a href="https://twitter.com/GetEuropaMas"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/europa_mas/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCWFCkIWcyuXA-ktr6RoRF-g"><i class="fa fa-youtube-play"></i></a>
                                <a href="http://www.linkedin.com/company/europamas"><i class="fa fa-linkedin"></i></a>
                                <div id="lang_selector" class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if (get_locale() == 'en_US') { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt="">
                                        <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/flag-es.png" alt="">
                                        <?php } ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo custom_multisite_link('en_US', $current_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt=""> English</a>
                                        <a class="dropdown-item" href="<?php echo custom_multisite_link('es_ES', $current_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-es.png" alt=""> Spanish</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-navbar-mobile col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-none d-lg-none d-md-block d-sm-block d-block">
                                <nav class="navbar navbar-expand-md" role="navigation">
                                    <a class="navbar-brand" href="https://europamas.com/browse" title="<?php echo get_bloginfo('name'); ?>">
                                        <?php ?> <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                                        <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                                        <?php if (!empty($image)) { ?>
                                        <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                        <?php } ?>
                                    </a>
                                    <button class="mobile-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </nav>
                                <div class="custom-mobile-navbar-container custom-mobile-navbar-container-hidden">
                                    <div class="main-elements">
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location'    => 'header_menu',
                                            'depth'             => 1, // 1 = with dropdowns, 0 = no dropdowns.
                                            'container'         => 'div',
                                        ) );
                                        ?>
                                    </div>
                                    <div class="second-elements">
                                        <a href="https://www.facebook.com/EuropaMas"><i class="fa fa-facebook-official"></i></a>
                                        <a href="https://twitter.com/GetEuropaMas"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.instagram.com/europa_mas/"><i class="fa fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UCWFCkIWcyuXA-ktr6RoRF-g"><i class="fa fa-youtube-play"></i></a>
                                        <a href="http://www.linkedin.com/company/europamas"><i class="fa fa-linkedin"></i></a>
                                        <div id="lang_selector" class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php if (get_locale() == 'en_US') { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt="">
                                                <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/flag-es.png" alt="">
                                                <?php } ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="<?php echo custom_multisite_link('en_US', $current_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt=""> English</a>
                                                <a class="dropdown-item" href="<?php echo custom_multisite_link('es_ES', $current_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-es.png" alt=""> Spanish</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
