<?php
function custom_post_type_testimonial() {

    // Register custom post type
    register_post_type('testimonial', array(
        'label'               => 'Testimonial Post',
        'labels'              => array(
            'name'               => __('Testimonial Post'),
            'singular_name'      => __('Testimonial'),
            'add_new'            => __('Add New'),
            'add_new_item'       => __('Add New Theme'),
            'edit_item'          => __('Edit Theme'),
            'view_item'          => __('View Theme'),
            'new_item'           => __('New Theme'),
            'not_found'          => __('Sorry, we couldn\'t find anything you are looking for'),
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'menu_position'       => 6,
        'rewrite'             => array('slug' => 'Testimonial'),
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest'        => true, // Gutenberg support
    ));
}
add_action('init', 'custom_post_type_testimonial');