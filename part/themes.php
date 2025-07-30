<!-- Themes Start -->
<div class="container mb-5">
  <h3 class="mb-md-4 mb-2">
    <a class="text-dark text-decoration-underline" href="<?php echo get_permalink(221); ?>"> Themes </a>

    <!-- It for live -->
    <!-- <a class="text-dark text-decoration-underline" href="<?php //echo get_permalink(221); 
                                                              ?>"> Themes </a> -->
  </h3>
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
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</div>
<!-- Themes End -->