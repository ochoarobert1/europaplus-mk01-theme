<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="footer-special-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row align-items-start justify-content-center">
                            <div class="footer-item footer-widget-1 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                                <ul id="sidebar-footer1">
                                    <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="footer-item footer-widget-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                                <ul id="sidebar-footer2">
                                    <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="footer-item footer-widget-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                                <ul id="sidebar-footer3">
                                    <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="w-100"></div>
                            <div class="footer-copy  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="img-fluid" />
                                <h5><?php _e('All Rights Reserved', 'europaplus'); ?> | <?php _e('Europa Más 2020', 'europaplus'); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>

</body>

</html>
