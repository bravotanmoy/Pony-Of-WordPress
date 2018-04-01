<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/zerogrid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

   
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<!-- Header -->
<header>
    <div class="wrap-header zerogrid">
        <div id="logo"><a href="<?php esc_url(bloginfo('home')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./images/logo.png"/></a></div>

        <?php
        // Wordpress Default Search
        //get_search_form();
        ?>
        <div id="search">
            <div class="button-search"></div>
            <form method="GET" action="<?php esc_url(bloginfo('home')); ?>">
                <input name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
            </form>
        </div>
    </div>
</header>

<nav>
    <div class="wrap-nav zerogrid">
        <div class="menu">
            <?php if(function_exists('wp_nav_menu')){
                wp_nav_menu(array(
                    'theme_location' => 'main-menu'
                ));
            }
            ?>
        </div>

    </div>
</nav>