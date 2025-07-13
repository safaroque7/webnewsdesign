<?php
/*
    Template Name: Template Welcome
*/
get_header();
?>

<div class="container-fluid mb-md-5 mb-2 px-0">
    <img src="<?php echo get_template_directory_uri() . '/images/slider-1.gif'; ?>" class="w-100" alt="<?php echo esc_attr(get_bloginfo('name') . ' homepage slider image'); ?>">
</div>

<!-- Themes Start -->
<div class="container mb-md-5 mb-2">
    <h3 class="mb-md-4 mb-2"> Themes </h3>
    <div class="row">
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
<!-- Themes End -->

<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container mb-md-5 mb-2">
        <h3 class="mb-md-4 mb-2"> Testimonial </h3>
        <div class="row">

            <ul class="bxslider">
                <li><img src="https://picsum.photos/id/22/170/200"></li>
                <li><img src="https://picsum.photos/id/23/170/200"></li>
                <li><img src="https://picsum.photos/id/24/170/200"></li>
                <li><img src="https://picsum.photos/id/25/170/200"></li>
                <li><img src="https://picsum.photos/id/26/170/200"></li>
                <li><img src="https://picsum.photos/id/27/170/200"></li>
                <li><img src="https://picsum.photos/id/28/170/200"></li>
                <li><img src="https://picsum.photos/id/29/170/200"></li>
            </ul>

        </div>
    </div>
</div>
<!-- Testimonial End -->



<?php get_footer();
