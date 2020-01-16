<?php get_header(); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row">
        <div class="page-container blog-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container p-0">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <section class="blog-posts-container col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="archive-item col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                            <div class="container p-0">
                                <div class="row">
                                    <picture class="archive-item-picture col-12">
                                        <?php if ( has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('full', $defaultatts); ?>
                                        </a>
                                        <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img itemprop="image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.jpg" alt="No img" class="img-fluid" />
                                        </a>
                                        <?php endif; ?>
                                    </picture>
                                    <div class="archive-item-info col-12">
                                        <header>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                                            </a>
                                            <time class="date" datetime="<?php echo get_the_time('Y-m-d') ?>" itemprop="datePublished"><i class="fa fa-clock-o"></i> <?php the_time('d-m-Y'); ?></time>
                                            <div class="category-container">
                                                <?php $array_categories = get_the_category(); ?>
                                                <i class="fa fa-envelope-o"></i> <?php foreach ($array_categories as $item_cat) { ?>
                                                <a href="<?php echo get_category_link($item_cat); ?>"><?php echo $item_cat->name; ?></a>
                                                <?php } ?>
                                            </div>
                                        </header>
                                        <div class="archive-item-excerpt">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <hr>
                                        <span class="author" itemprop="author" itemscope itemptype="http://schema.org/Person"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?> <?php the_author_posts_link(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <div class="pagination col-12">
                            <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                        </div>
                    </section>
                    <aside class="sidebar-blog col-4 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                        <?php get_sidebar(); ?>
                    </aside>
                    <?php else: ?>
                    <section>
                        <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'europaplus'); ?></h2>
                        <h3><?php _e('Dirígete nuevamente al', 'europaplus'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'europaplus'); ?>"><?php _e('inicio', 'europaplus'); ?></a>.</h3>
                    </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
