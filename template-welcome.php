<?php
/*
    Template Name: Template Welcome
*/
get_header();

?>

<div class="container">
    <div class="row mb-5">
        <?php
        $args = array(
            'post_type'         => 'themes', // if you want to further filter by post_type
            'order'             => 'ASC',
            'posts_per_page'    =>  -1
        );
        $query = new WP_Query($args);

        //  start quering
        while ($query->have_posts()): $query->the_post(); ?>
            <?php get_template_part('part/themeQuery'); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer();
