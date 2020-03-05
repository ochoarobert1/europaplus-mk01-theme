<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <label for="s" class="screen-reader-text"><?php _e('How can we assist you?', 'europaplus'); ?></label>
    <div class="input-group mb-3">
        <select name="s" id="s" class="form-control flexselect" placeholder="<?php _e('Enter search terms here', 'europaplus'); ?>">
            <?php $links_array = new WP_Query(array('post_type' => 'help-articles', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date')); ?>
            <?php if ($links_array->have_posts()) : ?>

            <?php while ($links_array->have_posts()) : $links_array->the_post(); ?>
            <option value="<?php echo get_permalink(); ?>">
                <?php the_title(); ?>
            </option>
            <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </select>
        <input type="hidden" name="post_type" value="help-articles" />

    </div>
</form>
