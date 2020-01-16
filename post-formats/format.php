<?php /* POST FORMAT - DEFAULT */ ?>
<?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
<article id="post-<?php the_ID(); ?>" class="the-single col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" itemscope itemtype="http://schema.org/Article">
    <div id="content" class="post-content" itemprop="articleBody">
        <?php the_content() ?>
        <?php wp_link_pages( array(
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'europaplus' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>', ) ); ?>
        <footer>
            <?php the_tags( __( 'Tags: ', 'europaplus' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
        </footer>
    </div><!-- .post-content -->
    <meta itemprop="datePublished" datetime="<?php echo get_the_time('Y-m-d') ?>" content="<?php echo get_the_date('i') ?>">
    <meta itemprop="author" content="<?php echo esc_attr(get_the_author()) ?>">
    <meta itemprop="url" content="<?php the_permalink() ?>">

</article> <?php // end article ?>
