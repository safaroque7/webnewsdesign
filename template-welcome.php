<?php
/*
    Template Name: Template Welcome
*/
get_header();

?>

<div class="container-fluid mb-md-5 mb-3 px-0">
    <img src="<?php echo get_template_directory_uri() . '/images/slider-1.jpg'; ?>" class="w-100" alt="<?php echo esc_attr(get_bloginfo('name') . ' homepage slider image'); ?>">
</div>

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
            <?php get_template_part('part/theme-query'); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer();
