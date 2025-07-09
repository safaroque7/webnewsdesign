<?php
//for adding classes on main menu li

//add_classes_on_main_menu_li
function add_classes_on_main_menu_li($classes, $item, $args)
{
    // Check if the menu location is 'mainMenu'
    if ($args->theme_location === 'mainMenu') {
        // Add a custom class to the menu item
        $classes[] = 'nav-item'; // Add your custom class here
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_main_menu_li', 10, 3);

//add_classes_on_main_menu_li
function add_classes_on_main_menu_a($atts, $item, $args)
{
    // Check if the menu location is 'mainMenu'
    if ($args->theme_location === 'mainMenu') {
        // Add a custom class to the anchor tag
        $atts['class'] = 'nav-link'; // Add your custom class here
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_classes_on_main_menu_a', 10, 3);
