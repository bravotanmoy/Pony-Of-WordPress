<?php

function newdesign_left_sidebar(){
    register_sidebar( array(
            'name' => __( 'Left Side Bar', 'tanmoy' ),
            'id' => 'leftsidebar',
            'description' => __( 'This is widget for welcome text', 'brightpage' ),
            'before_widget' => '<article class="col-sm-7">',
            'after_widget' => '</article>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
		'name' => __( 'Left Side Bar', 'tanmoy' ),
                'id' => 'leftsidebar',
		'description' => __( 'This is widget for welcome text', 'brightpage' ),
		'before_widget' => '<article class="col-sm-7">',
		'after_widget' => '</article>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );   
}


add_action('widgets_init', 'newdesign_left_sidebar');



