<div class="container">
	<div class="row mb-5">
		<?php
            $args = array(
            'post_type'         => 'themes', // if you want to further filter by post_type
            'order'             => 'ASC',
            'posts_per_page'    =>  12,
            'tax_query' => array(
                array(
                'taxonomy' => 'theme',
                'field' => 'term_id',
                'terms' => 22 // you need to know the term_id of your term "example 1"
                 )
              )
            );
            $query = new WP_Query( $args ); 
        ?>
	
			<?php get_template_part('part/themeQuery'); ?>
		
	</div>
</div>