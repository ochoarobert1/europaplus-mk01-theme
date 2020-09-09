<?php get_header(); ?>
<main class="container">
    <div class="row">
        <div class="main-help-articles-container col-12">
            <div class="row">
                <div class="main-help-title col-12">
                    <h2><?php _e('Ayuda y Asistencia', 'europaplus'); ?></h2>
                </div>
                <div class="main-help-articles-search-container col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php get_template_part('help-searchform'); ?>
                </div>
                <div class="w-100"></div>
                <?php $topics_array = get_terms(array('taxonomy' => 'help-topics', 'hide_empty' => 0, 'order' => 'ASC', 'orderby' => 'date')); ?>
                <?php if (!empty($topics_array)) { ?>
                <?php foreach ($topics_array as $topics_item) { ?>
                <div class="main-help-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h3><?php echo $topics_item->name; ?></h3>
                    <?php $links_array = new WP_Query(array('post_type' => 'help-articles', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', 'tax_query' => array( array( 'taxonomy' => 'help-topics', 'field' => 'term_id', 'terms' => $topics_item->term_id )))); ?>
                    <?php if ($links_array->have_posts()) : ?>
                    <ul>
                        <?php while ($links_array->have_posts()) : $links_array->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
