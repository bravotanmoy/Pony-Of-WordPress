<?php
function tanmoy_files_enqueue() {
 //Style
 wp_enqueue_style('animation-css',  get_template_directory_uri().'/css/animate.css', array(), '1.0');
 wp_enqueue_style('bootstrap-css',  get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0');
 wp_enqueue_style('font-awsome-css',  get_template_directory_uri().'/font-awesome/css/font-awesome.min.css', array(), '1.0');
 wp_enqueue_style('theme-css',  get_template_directory_uri().'/css/style.css', array(), '1.0');
 wp_enqueue_style('color-css',  get_template_directory_uri().'/color/default.css', array(), '1.0');
 wp_enqueue_style('main-css', get_stylesheet_uri());

// Scripts
 wp_enqueue_script('jquery');
 //wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.9.1', true );
 //wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.9.1', true );
 wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'jquery-easing', get_template_directory_uri().'/js/jquery.easing.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'jquery-scrollTo', get_template_directory_uri().'/js/jquery.scrollTo.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'jquery-wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'custom-jquery', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'tanmoy_files_enqueue' );

/*** Manu Code ***/

require_once('bravo-walker.php');
function file_essential_functions(){

add_theme_support('title-tag');

 load_theme_textdomain('Fire', get_template_directory_uri().'/languages');


 register_nav_menu('main-menu',__('Main Menu','Fire'));

}
add_action('after_setup_theme','file_essential_functions');

function default_main_menu(){
    echo '<ul class="navbar-nav nav">';
    echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
    echo '</ul>';

}




?>
