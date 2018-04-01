<?php 

function pony_theme_options(){

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');


	// Custom Post Type
	register_post_type('team',array(
			'public'   => true,
			'labels'   => array(
				'name'       => 'Team Member',
				'all_items'  => 'All Member',
				'add_new'     => 'Add Member'
			),
			'supports' => array('title','editor','thumbnail'),
			'menu_icon'    => 'dashicons-groups'
	));

}

add_action('after_setup_theme','pony_theme_options');




function cmb2_pony_scripts() {

	wp_enqueue_style( 'carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'owl_theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0' );

	wp_enqueue_style('fontawesome',  get_template_directory_uri().'/css/fontawesome-all.min.css', array(), '1.0');
	wp_enqueue_style('main-css', get_stylesheet_uri());


	// JavaScript Scripts
 	wp_enqueue_script('jquery');

 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0', true );
 	wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0', true );



}
add_action( 'wp_enqueue_scripts', 'cmb2_pony_scripts' );


include("cmb2/init.php");
include("cmb2/config.php");