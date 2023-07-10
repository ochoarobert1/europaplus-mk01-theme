<?php get_header('empty'); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row justify-content-start align-items-start">
        <article id="post-404" class="page-container not-found-page col-12">
            <h1><?php _e('¿Buscas más?', 'europaplus'); ?> </h1>
            <a href="<?php echo home_url('/'); ?>" class="btn btn-md btn-404"><?php _e('Aqui hay más', 'europaplus'); ?></a>
            <div class="text">
                <?php _e('más entretenimiento, más flexibilidad, más series y programas europeos', 'europaplus'); ?>
            </div>
            <div class="notification-text">
                <h3><?php _e('404 - Página No Encontrada', 'europaplus'); ?></h3>
                <div class="text"><?php _e('¡Lo sentimos! La página que estás buscando no existe.', 'europaplus'); ?></div>
                <div class="text"><?php _e('Tal vez escribiste mal la dirección o la página no está disponible por el momento.', 'europaplus'); ?></div>
            </div>
            <div class="social-networks">
                <a href="https://www.facebook.com/EuropaMas" target="_blank"><i class="fa fa-facebook-official"></i></a>
                <a href="https://twitter.com/GetEuropaMas" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/europa_mas/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCWFCkIWcyuXA-ktr6RoRF-g" target="_blank"><i class="fa fa-youtube-play"></i></a>
            </div>
        </article>
    </div>
</main>
<?php get_footer('empty'); ?>