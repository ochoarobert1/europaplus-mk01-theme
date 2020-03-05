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
			<div class="container">
				<div class="row justify-content-center">
			        <div class="page-content col-12">
						<br/>
						<h1 class="text-center text-white">Soporte Técnico</h1>
						<br/>
			            <?php the_content(); ?>	
					</div>
				</div>
			</div>
            
        </section>
    </div>
</main>
<?php get_footer(); ?>
