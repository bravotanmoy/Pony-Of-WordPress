<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- <title><?php // bloginfo('name'); ?> | <?php // bloginfo('description'); ?></title> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asubtlebeige.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

   
<?php wp_head();
// "body_class()" for custom-background ?>
<body <?php body_class(); ?>>
<div id="page"> 
    <div id="header" style="background-image: url('<?php header_image();?>')">
    	<div class="title"><?php bloginfo('name');?></div>
        <div class="subText"><?php bloginfo('description');?></div>
    </div>
    <div id="bar">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));
        ?>
    </div>