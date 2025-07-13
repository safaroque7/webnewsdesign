<!-- Themes Start -->
<div class="container mb-md-5 mb-2">
  <h3 class="mb-md-4 mb-2"> Themes </h3>
  <div class="row">
    <?php
        $args = array(
            'post_type'         => 'themes', // if you want to further filter by post_type
            'order'             => 'ASC',
            'posts_per_page'    =>  6
        );
        $query = new WP_Query($args);

        //  start quering
        while ($query->have_posts()): $query->the_post(); 
        get_template_part('part/theme-query');
        endwhile; wp_reset_postdata(); 
      ?>
  </div>
</div>
<!-- Themes End -->