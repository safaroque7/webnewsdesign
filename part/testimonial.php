<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container mb-md-5 mb-2">
        <h3 class="mb-md-4 mb-2"> Testimonial </h3>
        <div class="row">
            <div class="col-12 testimonial">

                <div class="flexslider carousel">
                    <ul class="slides">

                        <?php
                        $custom_post = new WP_Query(array(
                            'post_type'         =>  'testimonial',
                            'posts_per_page'    =>  5,
                            'order'             =>  'ASC'
                        ));

                        while($custom_post->have_posts()): $custom_post->the_post();{ ?>

                        <!-- per item start -->
                        <li class="row d-flex align-items-center">
                            <div class="col-5 image-identity pl-0">

                                <?php
                                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                ?>

                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>"
                                    class="img-fluid circle pl-0 ml-0 mb-2">

                                <h5> <?php the_title();?> </h5>
                                <?php 
                                    // position
                                    $position_name = get_field('position_name');
                                    if(!empty($position_name)){ ?>
                                <p class="mb-0"> <?php echo $position_name; ?> </p>
                                <?php }
                                
                                    // office_name
                                    $office_name = get_field('office_name');
                                    if(!empty($office_name)){ ?>
                                <p class="mb-0 font-weight-bold"> <?php echo $office_name; ?> </p>
                                <?php }

                                    // address
                                    $address_name = get_field('address_name');
                                    if(!empty($address_name)){ ?>
                                <p class="mb-0"> <?php echo $address_name; ?> </p>
                                <?php }
                                ?>
                            </div>
                            <div class="col-6 comment d-flex justify-content-center align-items-center">
                                <?php the_content();?>
                            </div>
                        </li>
                        <!-- per item end -->

                        <?php }
                    endwhile; wp_reset_postdata();
                    ?>

                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonial End -->