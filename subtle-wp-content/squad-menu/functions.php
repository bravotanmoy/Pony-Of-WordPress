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



function file_essential_functions(){

 register_nav_menu('main-menu','Main Menu');

}
add_action('after_setup_theme','file_essential_functions');

function default_main_menu(){
   echo '<ul class="nav navbar-nav">';

   if(is_user_logged_in()){
   		/*
		*  'wp_list_pages()'  retrive all pages 
   		*/
        echo '<li><a href="'.home_url().'/wp-admin/nav-menus.php">Cerate a Menu</a></li>';
    }
    else{
        echo '<li><a href="'.home_url().'">Home</a></li>';
    }
   echo '</ul>';
}


// Register Custom Navigation Walker
 require_once('wp_bootstrap_navwalker.php');

 



?>
