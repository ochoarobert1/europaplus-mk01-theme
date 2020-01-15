<?php get_header(); ?>
<?php the_post(); ?>
<main class="container">
    <div class="row">
        <div class="single-main-container single-main-help-container col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <h1><?php the_title(); ?></h1>
            <div class="single-help-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
