<?php get_header(); ?>
<?php the_post(); ?>
<?php $current_id = get_the_ID(); ?>
<main class="container">
    <div class="row">
        <div class="single-main-container single-main-help-container col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="single-main-helper col-12">
                        <h2><?php _e('Help &amp; Assistance', 'europaplus'); ?></h2>
                    </div>
                    <div class="single-main-help-menu col-3">
                        <div class="row">
                            <?php $topics_array = get_terms(array('taxonomy' => 'help-topics', 'hide_empty' => 0, 'order' => 'ASC', 'orderby' => 'date')); ?>
                            <?php if (!empty($topics_array)) { ?>
                            <?php foreach ($topics_array as $topics_item) { ?>
                            <div class="main-help-menu-content col-12">
                                <h3><?php echo $topics_item->name; ?></h3>
                                <?php $links_array = new WP_Query(array('post_type' => 'help-articles', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', 'tax_query' => array( array( 'taxonomy' => 'help-topics', 'field' => 'term_id', 'terms' => $topics_item->term_id )))); ?>
                                <?php if ($links_array->have_posts()) : ?>
                                <ul>
                                    <?php while ($links_array->have_posts()) : $links_array->the_post(); ?>
                                    <li>
                                        <?php if ($current_id == get_the_ID()) { $class = 'active'; } else { $class = ''; } ?>
                                        <a href="<?php the_permalink(); ?>" class="<?php echo $class; ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="single-main-help-content col-9">
                        <h1><?php the_title(); ?></h1>
                        <div class="single-help-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php get_footer(); ?>
