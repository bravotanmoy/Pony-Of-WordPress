<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
<title>CMB2 framework</title>
<link rel="icon" href=""/>



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1>fsdfsf</h1>
<div class="owl-carousel owl-theme">


    <?php 
         query_posts(array(
            'post_type'  =>  'team'
        ));
    while(have_posts()) : the_post(); ?>
    
    <div class="item">
        <?php the_post_thumbnail(); ?>
        
        <div class="content-wrapper">
            <p><?php the_title(); ?></p>
            <span><?php echo get_post_meta(get_the_ID(), 'jb-title', true); ?></span><br>
            <strong>
                <?php the_content(); ?> 
            </strong>
            <ul class="social-icons">
                <li><a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'fb-link', true); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'twitter-link', true); ?>"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'link-din', true); ?>"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
    <?php endwhile; ?>
    
    

    
    


</div>


<?php wp_footer(); ?>
</body>
</html>
