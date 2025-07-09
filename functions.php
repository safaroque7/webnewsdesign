<?php
//for default
include_once('include/default.php');

//for adding classes on main menu li
include_once('include/add_classes_on_main_menu_li_and_a.php');

//for portfolio css and js
include_once('include/portfolio_css_js.php');

//for main slider
include_once('include/custom_post_english.php');

//for main menu
include_once('include/menu.php');

//for tutorial
include_once('include/custom_post_tutorial.php');

//for themes
include_once('include/custom_post_type_themes.php');

//for themes
include_once('include/content_below_tag.php');

//for viewer_counter
include_once('include/viewer_counter.php');


add_action('init', 'gp_register_taxonomy_for_object_type');
function gp_register_taxonomy_for_object_type()
{
    register_taxonomy_for_object_type('post_tag', 'themes');
};
