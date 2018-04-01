<?php 


// Dynamic Title on browser title bar (Settings > Genarel)
add_theme_support('title-tag');

// Background Image or Color  (It's work on body tag)
add_theme_support('custom-background');

// Dynamic Header Images (Settings > Genarel)
add_theme_support('custom-header',array(
    'default-image' => get_template_directory_uri().'/images/header.png'
));


//Image
add_theme_support('post-thumbnails');

// Loading textdomain
load_theme_textdomain('subtel', get_template_directory_uri().'/languages');



/* Munu Register
  #-> "register_nav_menu()" for single menu
  #-> "register_nav_menus()" for multiple menus  */

  register_nav_menus(array(
        'main-menu'=> __('Main Navigation', 'subtel'),
        'footer-menu'=> __('Footer Menu Navigation', 'subtel'),
  ));