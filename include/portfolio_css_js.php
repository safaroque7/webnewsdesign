<?php
function portfolio_css_js() {
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0', 'all');
    wp_register_style('bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'screen');
    wp_register_style('maincss', get_stylesheet_uri(), array(), null, 'all');

    wp_enqueue_style('fontawesome');
    wp_enqueue_style('bootstrapmin');
    wp_enqueue_style('maincss');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'portfolio_css_js');