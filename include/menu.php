<?php
function portfolio_menu()
{
    register_nav_menus(array(
        'mainMenu' => __('Main Menu', 'portfolio'),
        'bottomMenu' => __('Bottom Menu', 'portfolio'),
    ));
}
add_action('init', 'portfolio_menu');
