<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container mb-md-5 mb-2">
        <h3 class="mb-md-4 mb-2"> Review </h3>
        <div class="row">
            <div class="col-12 testimonial">

                <div class="flexslider carousel">
                    <ul class="slides">

                        <?php
                        $custom_post = new WP_Query(array(
                            'post_type'         =>  'review',
                            'posts_per_page'    =>  -1,
                            'order'             =>  'ASC'
                        ));

                        while($custom_post->have_posts()): $custom_post->the_post();{ ?>

                        <!-- per item start -->
                        <li class="row d-flex align-items-center bg-white rounded-wnd">
                            <div class="col-12 p-md-4 p-md-2 p-3 text-align-justify-wnd">
                                <div>
                                    <?php $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
                                    <div class="d-flex align-items-center justify-content-between mb-md-4 mb-2">
                                        <div class="review-image rounded-circle pl-0 ml-0 mr-md-3 mb-2">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>"
                                                class="img-fluid">
                                        </div>
                                        <div class="reviewer-name-address">
                                            <h5> <?php the_title();?> </h5>
                                            <?php 
                                    // address
                                    $address = get_field('address');
                                    if(!empty($address)){ ?>
                                            <p class="mb-0"> <?php echo $address; ?> </p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php the_content();?>
                                </div>
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