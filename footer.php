<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="footer-special-container col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                        <div class="row align-items-start justify-content-center">
                            <div class="footer-item footer-widget-1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                                <ul id="sidebar-footer1">
                                    <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="footer-item footer-widget-2 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                                <ul id="sidebar-footer2">
                                    <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="footer-item footer-widget-2 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                                <ul id="sidebar-footer3">
                                    <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="w-100"></div>
                            <div class="footer-copy  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5><?php _e('All Rights Reserved', 'flowerclub'); ?> <?php _e('The Flower Club & Harmony 2019 / 2020', 'flowerclub'); ?></h5>
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
