<?php

function zboom_default_functions(){
    // Dynamic Title on browser title bar (Settings > Genarel)
    add_theme_support('title-tag');
    //Image
    add_theme_support('post-thumbnails');
    // Background Image or Color  (It's work on body tag)
    add_theme_support('custom-background');


    // Loading textdomain
    load_theme_textdomain('zboom', get_template_directory_uri().'/languages');


    /* Munu Register
      #-> "register_nav_menu()" for single menu
      #-> "register_nav_menus()" for multiple menus  */
    if(function_exists('register_nav_menu')){
        register_nav_menu('main-menu', __('Main Menu', 'zboom'));
    }



    // Core PHP Script for post Excerpt [READ MORE]
    function read_more($limit){
        $post_content = explode(" ", get_the_content());

        $less_content = array_slice($post_content, 0, $limit);

        echo implode(" ", $less_content);
    }


    //For Slider
    register_post_type( 'zoom-slider', array(
        'label'  => 'Slide',
        'public' => true,
        'menu_icon' => 'https://cdn4.iconfinder.com/data/icons/stash/128/palette-24.png',  //Icon from dashicons list
        'labels' => array(
            'name' => 'Home Slider',
            'singular_name' => 'slide',
            'add_new' => 'Add New Slider Image',
        ),
        'supports' => array('title','thumbnail','custom-fields') //which items are needed in wp dashboard
    ));


    //For Service
    register_post_type( 'zoom-services', array(
        'label'  => 'Services',
        'public' => true,
        'menu_icon' => 'https://cdn3.iconfinder.com/data/icons/ballicons-reloaded-free/512/icon-57-24.png',
        'labels' => array(
            'name' => 'Home Services',
            'singular_name' => 'services',
            'add_new' => 'Add New Services',
        ),
        'supports' => array('title','editor')
    ));


    //For Gallery Page Post
    register_post_type( 'zoom-gallery', array(
        'label'  => 'Services',
        'public' => true,
        'menu_icon' => 'https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/image-20.png',
        'labels' => array(
            'name' => 'Gallery Item',
            'singular_name' => 'services',
            'add_new' => 'Add New Gallery Item',
        ),
        'supports' => array('title','editor','thumbnail')
    ));
    // Gallery Post taxonomy
    register_taxonomy('gallery-category','zoom-gallery', array(
        'labels' => array(
            'name' => 'tanmoy-taxonomy',
            'add_new_item' => 'Add New Tanmoy',
            'parent_item' => 'Parent Tanmoy'
        ),
        'public' => true,
        'hierarchical' => true,
    ));
          // one more taxonomy
    register_taxonomy('tanmoy skills','zoom-gallery', array(
        'labels' => array(
            'name' => 'tanmoy-skills',
        ),
        'public' => true,
    ));


}
add_action('after_setup_theme','zboom_default_functions');



// Sidebar Register
function zboom_right_sidebar() {
    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'zboom' ),
        'id' => 'right-sidebar',
        'description' => __( 'Add your right sidebar widgets here', 'zboom' ),
        'before_widget' => '<div class="box">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));


    register_sidebar( array(
        'name' => __( 'Contract Right Sidebar', 'zboom' ),
        'id' => 'contact-right-sidebar',
        'description' => __( 'Add your Contract right sidebar widgets here', 'zboom' ),
        'before_widget' => '<div class="box">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));



    register_sidebar( array(
        'name' => __( 'Footer Widget', 'zboom' ),
        'id' => 'footer-widget',
        'description' => __( 'Add your right sidebar widgets here', 'zboom' ),
        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));


}
add_action('widgets_init', 'zboom_right_sidebar');


// Meta Box
require_once('inc/metabox.php');


// Redux Framework
require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');


// Shortcodes
require_once('inc/shortcodes.php');



// Change WordPress Login Logo
require_once('inc/wp-login-form-style.php');


//Create user without dashboard Access
require_once('inc/create_user.php');





