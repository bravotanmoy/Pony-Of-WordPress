<?php

function zboom_heading($atts, $content){

    $heading = shortcode_atts(array(
        'position' => 'left'
    ),$atts);

    return "<h1 align='".$heading['position']."'>".$content."</h1>";

}
add_shortcode('heading','zboom_heading');



/*
function zboom_image($atts, $content){

	return '<img src="'.$content.'" />';

}
add_shortcode('image','zboom_image');*/

function zboom_block_shortcode(){
ob_start(); ?>


<?php query_posts( array(
		'post_type' => 'zoom-services',
		'posts_per_page' => 3,
) );?>

<?php while(have_posts()) : the_post();?>
	<div class="col-1-3">
		<div class="wrap-col box">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content();?></p>
			<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
		</div>
	</div>
<?php endwhile;?>



<?php $block = ob_get_clean();
return $block;

}
add_shortcode('block', 'zboom_block_shortcode');