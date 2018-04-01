<?php get_header();?>


<div id="pageContent">
    
        <?php echo have_posts()?>
        <?php while( have_posts() ) : the_post(); ?>
        
            <div class="articleTitle"><?php the_title(); ?></div> 
           
            <div class="articleContent">
               <?php the_content();?>
            </div>

        <?php endwhile; ?>
        
    </div>

</div>





<?php get_footer();?>