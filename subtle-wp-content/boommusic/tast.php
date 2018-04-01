<?php 
/*
Template Name: Test
*/
get_header();?>

<!-- Content -->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

				<?php while(have_posts()) : the_post()?>
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author();?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('NO Comment','01 Comment','% Comments','tanmoy-class','Comment Disable');?></div>
						<?php the_content();?>
										<?php/*
										* 'get_the_ID()' getting post id
										* '$post->ID' getting post id
										*/?>
						<h1>Our Favorite Item: <?php echo get_post_meta(get_the_ID(), 'favorite-bike', true);?></h1>

					</article>
				<?php endwhile; ?>

				</div>
			</div>
			<div class="col-1-3">
				<?php //  Get HTML from sidebar.php
				get_sidebar();
				?>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>