<?php
/**
* Template Name: Template - Pagina Fullwidth
*
* @package europaplus
* @subpackage europaplus-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section id="post-<?php the_ID(); ?>" class="page-container col-12" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <?php the_content(); ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>
