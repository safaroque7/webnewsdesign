<?php get_header(); ?>

<div class="container-fluid mb-3">
    <div class="row">
        <div class="col-md-3 bg-white vl d-none d-md-block">
            <?php
            $args = array(
                'post_type' => 'tutorial',
                'order' => 'ASC',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <h5 class="border-bottom py-2">
                    <a class="text-dark" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h5>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>

        <div class="col-md-9">
            <!-- Mobile Dropdown for Tutorial Selection -->
            <div class="w-100 mb-2 d-block d-md-none">
                <h4>ভিডিও টিউটোরিয়াল</h4>
                <select class="form-control" lang="bn" onchange="if(this.value) window.location.href=this.value;">
                    <option value="" disabled hidden selected>-- ভিডিও টিউটোরিয়াল সিলেক্ট করুন --</option>
                    <?php
                    $main_query = new WP_Query($args);
                    if ($main_query->have_posts()) :
                        while ($main_query->have_posts()) : $main_query->the_post(); ?>
                            <option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <option disabled>কোনো আইটেম পাওয়া যায়নি।</option>
                    <?php endif; ?>
                </select>
            </div>

            <!-- Show the Latest Video -->
            <?php
            // ইউটিউব ভিডিও লিংককে embed URL এ কনভার্ট করার ফাংশন
            function convert_to_embed_url($url)
            {
                if (strpos($url, 'watch?v=') !== false) {
                    return str_replace('watch?v=', 'embed/', $url);
                } elseif (strpos($url, 'youtu.be/') !== false) {
                    return str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
                }
                return $url;
            }

            if (have_posts()) :
                while (have_posts()) : the_post();
                    $video_url = get_field('youtubeVideoLink');
                    $embed_url = convert_to_embed_url($video_url);
                    if ($embed_url) :
            ?>
                        <div class="embed-responsive embed-responsive-16by9 mb-md-3 mb-1">
                            <iframe
                                src="<?php echo esc_url($embed_url); ?>?rel=0&autoplay=1&autohide=1&showinfo=0"
                                frameborder="0"
                                allowfullscreen
                                loading="lazy"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                            </iframe>
                        </div>
                        <div class="vide-title-for-mobile">
                            <h2><?php the_title(); ?></h2>
                        </div>
            <?php
                    endif;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer();
