<?php get_header(); ?>
<?php the_post(); ?>
<main class="container">
    <div class="row">
        <div class="single-main-container single-main-post-container col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div class="container p-0">
                <div class="row">
                    <?php /* GET THE POST FORMAT */ ?>
                    <div class="main-post-thumbnail col-12">
                        <?php the_post_thumbnail(); ?>
                        <div class="main-post-thumbnail-overlay">
                            <h1><?php the_title(); ?></h1>
                            <div><i class="fa fa-envelope-o"></i> <?php the_category(' '); // Separated by commas ?> <span class="date"><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> <span class="author">By: <?php the_author_posts_link(); ?></span></div>
                            <div class="go-down">
                                <a href="#content"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php get_template_part( 'post-formats/format', get_post_format() ); ?>
                    <aside class="the-sidebar col-xl-4 col-md-4 col-sm-4 d-xl-flex d-lg-flex d-md-none d-sm-none d-none" role="complementary">
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
